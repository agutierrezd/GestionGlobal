<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */
 
 class eventclass_ep_agregada  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["BeforeImport"]=true;


	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before Import Started
function BeforeImport(&$pageObject, &$message)
{

		$sql = DB::prepareSQL("TRUNCATE TABLE ep_agregada;");
DB::Exec( $sql );


// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
;		
} // function BeforeImport

		
		
		
		
		
		



}
?>
