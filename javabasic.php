<?php 
    include_once('header.php');
?>


<div class="jumbotron">
    <div class="header_style">
        <h1 align="center">Java</h1>
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
            <a class="list-group-item list-group-item-action active" id="list-profile-list" data-toggle="list" href="javabasic.php" role="tab">Java</a>
            <a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" role="tab"  onclick="return simplejavaexample();">Simple Java program</a>
            <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" role="tab"  onclick="return datatypesinjava();">Data types and variable in Java</a>
			<a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" role="tab"  onclick="return intshortlongbyteinjava();">int, short, long and byte</a>
			<a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" role="tab"  onclick="return floatanddouble();">float and double</a>
			<a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" role="tab"  onclick="return charinjava();">char</a>
			<a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" role="tab"  onclick="return booleaninjava();">boolean</a>
			<a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" role="tab"  onclick="return castinginjava();">Casting in Java</a>
			<a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" role="tab"  onclick="return operatorinjava();">Operators in Java<a/>
			<a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" role="tab"  onclick="return unaryoperatorinjava();">Unary operator</a>
			<a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" role="tab"  onclick="return arithmaticoperaorinjava();">Arithmetic operator</a>
			<a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" role="tab"  onclick="return relationaloperatorinjava();">Relational operator</a>
			<a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" role="tab"  onclick="return logicaloperatorinjava();">Logical operator</a>
			<a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" role="tab"  onclick="return assignmentoperatorinjava();">Assignment operator</a>
			<a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" role="tab"  onclick="return bitwiseoperatorinjava();">Bitwise operator</a>
			<a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" role="tab"  onclick="return ternaryoperatorinjava();">Ternary operator</a>
			<a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" role="tab"  onclick="return shiftoperatorinjava();">Shift operator</a>
			<a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" role="tab"  onclick="return javafunc();">Functions in Java</a>
			<a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" role="tab"  onclick="return calapp();">Calculator app using functions in java</a>
			<a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" role="tab"  onclick="return controlstatementinjava();">Control statement in Java</a>
			<a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" role="tab"  onclick="return iifelsestatement();">if statement in java</a>
			<a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" role="tab"  onclick="return switchstatement();">Switch statement in java</a>
			<a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" role="tab"  onclick="return funcname();">Jump statement in Java</a>
			<a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" role="tab"  onclick="return loopsinjava();">Loops in Java</a>
			<a class="list-group-item list-group-item-action" id="list-home-list list-group-item-info" data-toggle="list" role="tab"  onclick="return forloopsinjava();">for loops in java</a>
			<a class="list-group-item list-group-item-action" id="list-home-list list-group-item-info" data-toggle="list" role="tab"  onclick="return whileloopinjava();">while loops in java</a>
			<a class="list-group-item list-group-item-action" id="list-home-list list-group-item-info" data-toggle="list" role="tab"  onclick="return dowhileloopinjava();">do while loops in java</a>
			<a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" role="tab"  onclick="return stringinjava();">String in Java</a>
			<a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" role="tab"  onclick="return stringmethodsinjava();">Strings methods in Java example</a>
			<a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" role="tab"  onclick="return stringconcatenationinjava();">String concatenation in Java</a>
			<a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" role="tab"  onclick="return parsingvaluesfromstring();">Parsing values from string</a>
			<a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" role="tab"  onclick="return scannerclassinjava();">Scanner Class</a>
			<a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" role="tab"  onclick="return methodsofascannerclass();">Methods of Scanner Class</a>
			
			
			
			
			<a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" role="tab"  onclick="return funcname();"> </a>
        </div>
    </div>

    <div class="col-sm-8">
        <div class="div-scrollable" id="DisplayDiv">
            <p>
			Java is a secure general-purpose programming language that Sun Microsystem developed in the early 1990s. Java is an easy, dynamic, general-purpose language. Java was initially designed for embedded network applications running on multiple machines.
			</p>
			<p>
			Java is a platform-independent and a class-based, object-oriented programming language designed to develop desktop and mobile-based application. It is also used for the embedded system; big data added more.
			</p>
			<p>
			Java is platform-independent, which means we can write and run java code on any machines. Due to object-oriented, it makes our code easier to read and easy to manage. It adds more flexibility to our code. Like another programming language, Java is effective and fast, like a low lower programming language.
			</p>
			<h4><b><u>Java Compiler</u></b></h4>
			<p>
			A Java compiler takes the text file written on IDE (integrated development environment) and compiles that text into a (platform-independent) Java file. It also includes the Java Programming Language Compiler (javac), the GNU Compiler for Java (GCJ), the Eclipse Compiler for Java (ECJ) and Jikes. 
			</p>
           <p>
		   Java is a strong type of language in which all the variables must have the right kind of data. Suppose integer type of variable should contain integer type of data in java compiler is responsible for that to check during the compiling time. The Java compiler continuously checks the violation of a variable and throws a few exceptions at run time to catch. Also, the java compiler is responsible for syntax error checking during compiler time.
		   </p>
		   <h4><b><u>JAVAC</u></b></h4>
		   <p>
		   The "javac" reads class and interface, which the developers define in Java, and then compiles them into bytecode class files. 
		   </p>
		   <h4><b><u>JVM (Java virtual machine)</u></b></h4>
		   <p>
		   Java virtual machine is responsible for translating java byte code into native machine code. JIT (Just in time) compiles the given code to machine code at runtime before executing. It interacts with the java virtual machine. Its primary purpose is to improve performance by translating byte code to native machine code on runtime. 
		   </p>
		   <h4><b><u>JDK (Java Development Kit)</u></b></h4>
		   <p>
		   Jdk is an environment that helps to build applications. JDK contains a java runtime-time environment (JRE), javac, interpreter and all useful tools to develop java application. It also contains useful tools for developing and testing Java programs.
		   </p>
		   
           <img src="\images\java-compiler-diagram.png" class="img-responsive" alt="Cinque Terre">
        </div>
    </div>

</div>

<!-----------------------------------------list view End -------------------------------->

<?php 
    include_once('functions/javabasicfunctions.php');
    include_once('footer.php');
	include_once('mobileview.php');
?>