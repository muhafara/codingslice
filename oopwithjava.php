<?php 
    include_once('header.php');
?>


<div class="jumbotron">
    <div class="header_style">
        <h1 align="center">Object Oriented Programming with Java</h1>
    </div>
    <p align="center">Sample Codes </p>
</div>

<!-----------------------------------------list view-------------------------------->

<div class="mobileSideBar">
    <img src="images/threelines.png" alt="Click to Toggle sidebar Menu">
</div>


<div class="row">
    <div class="col-sm-4">
        <div class="list-group" id="list-tab" role="tablist">
            <a class="list-group-item list-group-item-action active" id="list-profile-list" data-toggle="list" href="javabasic.php" role="tab">Introduction to OOP</a>
			<a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" role="tab"  onclick="return classesandobject();">Class and Objects in Java</a>
			<a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" role="tab"  onclick="return funcname();">Access modifier in Java</a>
			<a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" role="tab"  onclick="return funcname();">Packege in Java</a>
			<a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" role="tab"  onclick="return constructorinjava();">Constructor in Java</a>
			<a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" role="tab"  onclick="return inheritanceinjava();">Inheritance in Java</a>
			<a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" role="tab"  onclick="return thisvssuperinjava();">this () vs super() in Java</a>
						<a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" role="tab"  onclick="return constructorchaininginjava();">Constructor chaining</a>
			<a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" role="tab"  onclick="return funcname();">Refrences in Java</a>
			<a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" role="tab"  onclick="return funcname();">Overloading and Overriding</a>
			<a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" role="tab"  onclick="return funcname();">Static vs instance variables</a>
			
			
			<a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" role="tab"  onclick="return funcname();"> </a>
        </div>
    </div>

    <div class="col-sm-8">
        <div class="div-scrollable" id="DisplayDiv">
           <h4><b><u>Class in object oriented programming.</u></b></h4>
		   <p>
		   It is a blueprint or template used to create objects and their data types and methods. We create classes so we can put similar things in the same class. Simply classes are like categories, and objects are like items that belong to the same categories.
		   </p>
		   <h4><b><u>Objects in object oriented programming. </u></b></h4>
		   <p>An object is a real-world entity or runtime entity. It is an instant of class that holds data. An object can consist of a state, behaviour and identity.
		   </p>
		   <h4><b><u>State of an object:</u></b></h4>
		   <p>It is represented by the characteristics of an object. State also reflects the properties of an object.</p>
		   <h4><b><u>The behaviour of an object:</u></b></h4>
		   <p>It is represented by the methods of an object. The behaviour of an object also reflects the response of an object to other objects.</p>
		   <h4><b><u>Identity of an object:</u></b></h4>
		   <p>It gives a unique name to an object and enables one object to interact with other objects.</p>
		   <img src="\images\class.png" class="img-responsive" alt="Cinque Terre">
        </div>
    </div>

</div>

<!-----------------------------------------list view End -------------------------------->

<?php 
    include_once('functions/oopfunctionsjava.php');
    include_once('footer.php');
	include_once('mobileview.php');
?>