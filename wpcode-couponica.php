<?php
/*
Plugin Name: WpCode.net Couponica
Plugin URI: http://www.wpcode.net/wpcode-couponica-v-0-1b.html
Description: Turn Your website into a powerfull wordpress based coupon website.
Version: 0.1b
Author: Pigi, WpCode
Author URI: http://www.digg-it.info/category/wp-plugin-dev
License: GPL2
*/


/*  Copyright 2010  Pigi  (email : pigi.bari@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/



require_once('menu/menu.php');

function couponica() {


?>

<script type="text/javascript">
function copy_to_clipboard(text)  
  {  
 
      if(window.clipboardData)  
      {  
      	window.clipboardData.setData('text',text);  
      }  
      else  
      {  
          


      }  
      alert('<?php echo get_option('custom_message'); ?> Powered by: WpCode.net Couponica');  
      return false;  
  }
</script>
<p style="float:right; width:100%; padding: 3px; background:#efefef url('http://wpcode.net/code.gif') no-repeat; border:1px dashed #ccc;">

<a onclick="copy_to_clipboard('<?php $values = get_post_custom_values("couponica_code"); echo $values[0]; ?>')" href="<?php $values = get_post_custom_values("couponica_link"); echo $values[0]; ?>" style="margin-left:40px;" target="_blank">
              
<?php $values = get_post_custom_values("couponica_code"); echo $values[0]; ?>
</a></p>
<?php } ?>
<?php add_shortcode('couponica', 'couponica');?>