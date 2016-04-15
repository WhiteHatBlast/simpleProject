<?php
# namespace hl5\expect;

/**
 * this is a pure php implementation of something like 'expect'. this is for
 * automating cli applications where the apps block while waiting for user
 * input. In the end, the goal is to automate these input blocking cli apps for
 * example, subversion asking for svn username and password.
 * @since april 23rd, 2012
 * @author shean massey
 */
class proc {
  private $_proc_resource = null;
  private $_cases = array();
  private $_output_text = '';
  private $_pipes = null;

  public function __construct( $process = '' ) {
    if ( $process ) {
      $this->open( $process );
    }
  }

  /**
   * create the internal pipes for reading and writing to the opened process
   */
  public function open( $process ) {
    $descriptors = array(
      0 => array('pipe', 'r'),
      1 => array('pipe', 'w'),
      2 => array('file', '/tmp/expect_errors.log', 'a'),
    );
    $this->_proc_resource = proc_open( $process, $descriptors, $pipes );
    if ( ! is_resource( $this->_proc_resource ) ) {
      throw new \exception('proc_open() failed to create a resource');
    }
    $this->_pipes = $pipes;
    return $this;
  }

  /**
   * close the opened pipes+process and return the return code of that process
   */
  public function close() {
    fclose( $this->_pipes[0] );
    fclose( $this->_pipes[1] );
    $return_code = proc_close( $this->_proc_resource );
    return $return_code;
  }

  /**
   * set the rules, and assoc array where the keys are strings
   * of 'expected text' and the values are closures to be executed
   * once the expected string has been matched
   */
  public function on( array $cases ) {
    $this->_cases = $cases;
    return $this;
  }

  /**
   * write to the opened processes input stream
   */
  public function write( $text ) {
    fwrite( $this->_pipes[0], $text );
    return $this;
  }

  /**
   * write() + newline
   */
  public function writeln( $text ) {
    return $this->write( $text . PHP_EOL );
  }

  /**
   * compare the end of the buffer with $expected_text
   */
  private function _caught( $expected_text ) {
    $expected_length = strlen( $expected_text );
    $buffer_length = strlen( $this->_output_text );
    $search_position = $buffer_length - $expected_length;
    $test_string = substr($this->_output_text,$search_position,$expected_length);
    return ($test_string===$expected_text);
  }

  /**
   * run the script that was previously open()d and apply the expectation rules
   */
  public function run() {
    while ( $char = stream_get_contents( $this->_pipes[1], 1 ) ) {
      $this->_output_text .= $char;
      foreach ( $this->_cases as $expected_text => $closure ) {
        if ( ! $this->_caught( $expected_text ) ) continue;
        $closure();
        $this->_output_text = '';
      }
    }
  }
}

$proc = new proc();
$proc->open('svn update /var/projects/library/');
$proc->on(array(
    'Subversion user name: ' => function() use ( $proc ) {
        $proc->writeln('shean.massey');
    },
    'Subversion password: ' => function() use ( $proc ) {
        $proc->writeln('my_super_secret_password!');
        exit( $proc->close() );
    },
))->run();

?>