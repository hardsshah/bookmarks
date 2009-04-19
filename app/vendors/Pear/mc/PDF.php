<?php
// extends the pear PDF class
require_once "File/PDF.php";

class mc_PDF extends File_PDF
{

    function __construct(){
        $this->setInfo(array(
        "title" => 		  "Invoice",
        "subject" => 	  "Invoice",
        "author" => 	  "Made Secure LLC",
        "keywords" => 	"Invoice",
        "creator" => 	  "Made Secure LLC"
            ));
        $this->setCompression(true);
        $this->setAutoPageBreak(true);
    }

    function header(){
        // add an image (file, x-cord, y-cord, [width], [height], [type], [link]) w or h 0 sets to default img will auto size which one is given
        $this->image('img/pdf/msc_logo.jpg', 10, 5, 0, 10, 'jpg', "http://www.madesecure.com/");
        // Line break Create spacing so img does not overlap text
        $this->newLine(15);
        // make a line accross the page, neg value starts from opposite side
        $this->line(10.0, 16.0, -10.0, 16.0);
    }

    function footer(){
        $text ='For questions contact Matthew Campbell. Office: 1.704.461.1664, Email: matt@madesecure.com';
        // Center and display the text
        $offset = ($this->getStringWidth($text))/2;
        $x_pos = 108 - $offset;
        // min from bottom 12.7 plus height 5
        $y_pos = -18;
        $this->text($x_pos, $y_pos, $text);
    }

    /**
     *Set the cursor position to write a line with right alignment
     *
     * @param string $line
     * @return float x position
     */
    function alignRight($line){
        // get position to write at
        $width = $this->getStringWidth($line);
        // calc distance from right side margin plus width of string // neg val not working
        $pos_x = $this->getPageWidth() + $this->_left_margin - $width - 3;
        // set position to write at
        $this->setX($pos_x);
        return $pos_x;
    }
    /**
     * Draw a fold line 1/3 down the page
     */
    function addFoldLine(){
        // Add a fold line 1/3 of page is 93 plus 8 who knows why but it works
        $y = 101.0;
        $this->line(10.0, $y, -10.0, $y);
        // Write the text below the fold line
        $this->setFontSize(6);
        $line = "Fold Along This Line";
        $width = $this->getStringWidth($line);
        //center the text
        $pos_x = 108 - ($width/2);
        $this->setX($pos_x);
        // add fold line text
        $this->setY($y);
        $this->write(3, $line);
    }
}
?>
