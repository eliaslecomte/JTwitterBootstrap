<?php
/*
 * Module chrome that adds slides for modules
 * based on xhtml chrome (if your module is styled with xhtml chrome selected, you won't lose css when you change to this chrome )
*/
// no direct access
defined('_JEXEC') or die('Restricted access');
function modChrome_standard( $module, $params, $attribs )
{
  // Determines H tag level (ie. h1, h2, h3)
  $headerTag = isset( $attribs['headerLevel'] ) ? $attribs['headerLevel'] : 'h2';
  $width = isset( $attribs['width'] ) ? $attribs['width'] : '';
  // Badge?
  $badge = preg_match( '/badge/', $params->get( 'moduleclass_sfx' ) ) ? '<span class="badge"></span>' : '';
  // Add module class suffix and unique class name
  $moduleClassSfx = '';
    $moduleUniqueClass = ' mod-'. $module->id ;
	  if ( $params->get( 'moduleclass_sfx' ) != NULL )
		{
			$moduleClassSfx = ' ' . $params->get( 'moduleclass_sfx' );
		}
  // Determine if title is on or off and add class
  $showTitle = '';
  $hide = '';
  if ( $module->showtitle == 0 ) :
    $showTitle = ' no-title';
  endif;
    // Output module
    echo '<div class="moduletable module-column' . $moduleUniqueClass . $moduleClassSfx . $showTitle . ' clearfix">' . "\n";
      echo '<div class="module-block">' . "\n";
        echo "\t\t" . '<div class="module-header">' . "\n";
          echo $badge;

          // Creates span around first word of module title for unique styling
          $part_one = explode(' ', $module->title);
          $part_one = $part_one[0];

          if( count( explode( ' ', $module->title ) ) > 1 ) {
              $part_two = substr( $module->title, strpos( $module->title,' ' ) );
          } else {
              $part_two = '';
          }
          echo "\t\t\t\t" . '<' . $headerTag . ' class="module-title"><span>'.$part_one.'</span>'.$part_two.'</' . $headerTag . '>' . "\n";
        echo "\t\t\t" . '</div>' . "\n";
        if ( !empty ( $module->content ) ) :
          echo "\t\t\t" . '<div class="module-content">' . "\n";
            echo "\t\t\t\t" . $module->content . "\n";
            echo "\t\t\t\t" . '<div class="clear"></div>' . "\n";
          echo "\t\t\t" . '</div>' . "\n";
        endif;
      echo "\t\t" . '</div>';
    echo "\t" . '</div>';
}
function modChrome_basic($module, $params, $attribs)
{
    if (!empty ($module->content)){
        echo $module->content;
    }
}
function modChrome_slider($module, &$params, &$attribs)
{
	echo JHtml::_('sliders.start', 'module-slider'.$module->id, array('startOffset' => 0));
	echo JHtml::_('sliders.panel',JText::_( $module->title ), 'moduletable' . $module->id);
//  Initialize variables
	echo $module->content;
	echo JHtml::_('sliders.end');
}
function modChrome_tabs($module, &$params, &$attribs)
{
 jimport('joomla.html.pane');

 $pane = JPane::getInstance('tabs', array('startOffset' => 0));
 if (count($module))
 {
  if (!defined( 'THISMODCHROME' ))
  {
   define( 'THISMODCHROME', 1 );
   echo $pane->startPane('pane');
  }
   echo $pane->startPanel($module->title, 'panel' . $module->id);
   echo $module->content;
   echo $pane->endPanel();
  if (!defined( 'THISMODCHROME' ))
  {
   //echo $pane->startPane('pane');
  }
 }
}
?>
