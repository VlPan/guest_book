<?PHP
class View {

    protected $_template;
    protected $_data = array();

    public function __construct($template)
    {
        if (file_exists($template))
        {
            $this->_template = $template;
        }
        else
        {
            exit('File ' . $template . ' not exists.');
        }
    }

    public function assign($key, $value)
    {
        $this->_data[$key] = $value;
        return $this;
    }

    public function display()
    {
        extract($this->_data);
        require ($this->_template);
    }

}
?>