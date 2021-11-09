<?php 
    include_once('header.php');
?>


<div class="jumbotron">
    <div class="header_style">
        <h1 align="center">Object oriented programming with C++</h1>
    </div>
    <p align="center">OOP with samples code</p>
</div>

<!-----------------------------------------list view -------------------------------->


<div class="mobileSideBar">
    <img src="images/threelines.png" alt="Click to Toggle sidebar Menu">
</div>




<div class="row">
    <div class="col-sm-4">
        <div class="list-group" id="list-tab" role="tablist">
            <a class="list-group-item list-group-item-action active" id="list-profile-list" data-toggle="list" href="oopwithc++.php" role="tab">OOP</a>
            <a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" role="tab"  onclick="return classinoop();">Class</a>
            <a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" role="tab"  onclick="return ;">Objects</a>
			<a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" role="tab"  onclick="return ;">Structures</a>
			<a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" role="tab"  onclick="return ;">Access modifiers </a>
			<a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" role="tab"  onclick="return ;">Constructor</a>
			<a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" role="tab"  onclick="return simplehelloworldprogram();">Destructor</a>
			<a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" role="tab"  onclick="return simplehelloworldprogram();">Inheritence</a>
			<a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" role="tab"  onclick="return simplehelloworldprogram();">Polymorphism</a>
			<a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" role="tab"  onclick="return simplehelloworldprogram();">Function overloading</a>
			<a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" role="tab"  onclick="return simplehelloworldprogram();">Functioin overriding</a>
			<a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" role="tab"  onclick="return simplehelloworldprogram();"></a>
			<a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" role="tab"  onclick="return simplehelloworldprogram();"></a>
            <a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" role="tab"  onclick="return simplehelloworldprogram();"></a>
			</div>
    </div>

    <div class="col-sm-8">
        <div class="div-scrollable" id="DisplayDiv">
		<h4><b><u>Introduction to OOP:</u></b></h4>
           <p>
OOP (object-oriented paradigm) is introduced to overcome the flaws in procedure-oriented language. It organized the software design which revolved around the objects or data. OOP represents the objects as a real entity of class, and it provides the fundamental structure of a code. It holds the data more closely to the function and protects its unauthorized modification.
In the object-oriented paradigm, there are following concepts which are used which will discuss further in details.
<h4><b><u>Objects:</u></b></h4>
Objects are the fundamental runtime entity or representation of a class which passes messages when a program executes. 
<h4><b><u>Class:</u></b></h4>
A class is a blueprint which represents the real entities or object of a class. It is the collection of similar objects, and it is user-defined data types.
<h4><b><u>Encapsulation:</u></b></h4>
OOP provides data encapsulation or wrapping up of data into a single object. It gives more security which means this data can not be accessible outside of the class and its also called "data hiding" which means only the object from the same class access this information.
<h4><b><u>Inheritance:</u></b></h4>
OOP provide inheritance which gave a concept of parents and child class. Child classes can get all the properties or inherit all the properties from their parent class.
<h4><b><u>Polymorphism:</u></b></h4>
OOP provide polymorphism which means we can perform a single action in many different ways. It also describes the concept that other classes can be used with the same interface. Every class can provide its implementation of the interface.
<h4><b><u>Dynamic Binding:</u></b></h4>
OOP provides dynamic binding, which means during runtime, the object will communicate with each other, and different objects from different classes will access share information or pass messages to each other.
		   </p>
		   <h4><b><u>Benefits of OOP and Software Crises:</u></b></h4>
		   <p>In software development technology is continue to dynamic new tools and techniques are introduced very quickly. It is challenging to handle the application, especially when the project is large, and it means more complexity is involved. The software industry is facing challenging and required solutions to over these kinds of challenges. OOP addressed to overcome these crises.
	<br>1. To represent real entities in of a problem in software development for design face.
	<br>2. To make software reusability and extensibility in modules.
	<br>3. Quickly develop the modules which can tolerate the changes after in advanced development.
	<br>4. To improve and make changes which don't affect the software quality. 
	<br>5. Industrialization the software development process.
    <br>6. Portability, security, integrity, correctness and user-friendly.</p>
		<h4><b><u>Differnece between procedure oriented programming and object oriented paradigm</u></b></h4>
		<p>The table below shows the differences between procedural programming and object-oriented programming.</p>
		<table class="table">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">OOP(Object-oriented paradigm)</th>
      <th scope="col">PPL (Procedural programming language)</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"></th>
      <td>OOP program is executed based on message passing between the classes with the help of an object.</td>
      <td>In procedural language program is executed from top to bottom using a smaller part of program called functions.</td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td>In oop, the program executes dynamically.</td>
      <td>In Procedural programming language program is executed in a sequence.</td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td>OOP provide access modifier for more security.</td>
      <td>Procedural programming language doesn't provide access modifier.</td>
    </tr>
	<tr>
      <th scope="row"></th>
      <td>OOP provide modification easily.</td>
      <td>Modification is quite complicated.</td>
    </tr>
	<tr>
      <th scope="row"></th>
      <td>OOP provide overloading.</td>
      <td>Function overloading doesn't provide.</td>
    </tr>
	<tr>
      <th scope="row"></th>
      <td>Represent real world</td>
      <td>Doesn't represent real world.</td>
    </tr>
  </tbody>
</table>
<h4><b><u>OOP (Object-oriented paradigm)</u></b></h4>
<img src="\images\oopbasic.png" class="img-responsive" alt="Cinque Terre">
<h4><b><u>PPL (Procedural-programming language)</u></b></h4>
<img src="\images\ppl.png" class="img-responsive" alt="Cinque Terre">
    </div>
</div>
</div>

<!-----------------------------------------list view End -------------------------------->

<?php 
    include_once('functions/oopfunctionscplusplus.php');
    include_once('footer.php');
	include_once('mobileview.php');
?>