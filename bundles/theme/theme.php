<?php

class Theme extends Theme\Theme {

	public function add_asset($filename, $path = null, $dependencies = array())
	{
        $base_path = path('public'); // absolute path to public

        $theme_path_relative = $this->_theme_path;

        $theme = $this->_theme_name;


        //directory path set
        if ($path == NULL)
        {
            $directory = $theme_path_relative .'/'. $theme . '/assets/';
        }
        else
        {
            $directory = $path;
        }


        if (ends_with($filename, ".js")){

            $asset_file_path = $directory . "js/" . $filename;
        }

        if (ends_with($filename,".css")){

             $asset_file_path = $directory . "css/" . $filename;
        }

        if (isset($asset_file_path))
        {
            //register the asset file into the template
            Asset::add($filename, $asset_file_path, $dependencies);
        }

    }

}



/**
 * Theme Helper Functions
 *
 */

 /**
  * Renders a partial of a theme or load a laravel view
  */
 function theme_partial($partial, $data=array())
 {
     $theme = IoC::resolve('Theme');

     return $theme->render_partial($partial, $data);
 }