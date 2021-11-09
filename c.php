<?php 
    include_once('header.php');
?>


<div class="jumbotron">
    <div class="header_style">
        <h1 align="center">C Language</h1>
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
            <a class="list-group-item list-group-item-action active" id="list-profile-list" data-toggle="list" href="c.php" role="tab">C</a>
            <a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" role="tab"  onclick="return simplehelloworldprograminc();">Simple C program</a>
            <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" role="tab"  onclick="return commentsinc();">Comments in C</a>
			<a class="list-group-item list-group-item-action active" id="list-profile-list" data-toggle="list" role="tab" onclick="return keywordsinc();">Keywords in C</a>
			<a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" role="tab"  onclick="return escapesequenceinc();">Escape sequence in C</a>
			<a class="list-group-item list-group-item-action active" id="list-profile-list" data-toggle="list" role="tab" onclick="return formatspecifierinc()();">Format Specifiers in C</a>
			<a class="list-group-item list-group-item-action active" id="list-profile-list" data-toggle="list" role="tab" onclick="return asciitableinc();">ASCII Codes</a>
			<a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" role="tab"  onclick="return datatypeinc();">Data types & Variables in C</a>
			<a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" role="tab"  onclick="return integerinc();">Integer in C</a>
			<a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" role="tab"  onclick="return charscterinc();">Char in C</a>
			<a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" role="tab"  onclick="return floatinc()();">Float in C</a>
			<a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" role="tab"  onclick="return stringinc()();">Strings in C</a>
			<a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" role="tab"  onclick="return enumerateddatatypeincenum();">Enum in C</a>
			<a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" role="tab"  onclick="return basicinputandoutputinc();">Basic input and output in C(printf and scanf)</a>
			<a class="list-group-item list-group-item-action" onclick="return simpleexampleusingscanfandprintf();">Simple examples(How to get data from user and print on screen in C)</a>
			<a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" role="tab"  onclick="return controlstatementinc();">Control statement in C</a>
			<a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" role="tab"  onclick="return ifstatementinc();">if statement in C</a>
			<a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" role="tab"  onclick="return switchcaseinc();">Switch in C</a>
			<a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" role="tab"  onclick="return conditionaloperatorinc();">Conditional Operator Statement in C</a>
			<a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" role="tab"  onclick="return gotostamentinc();">GoTo Statement in c</a>
			<a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" role="tab"  onclick="return loopsinc();">Loops in C</a>
			<a class="list-group-item list-group-item-action list-group-item-info" onclick="return forloopinc();">for-loop in C</a>
			<a class="list-group-item list-group-item-action list-group-item-info" onclick="return whileloopinc();">while-loop in C</a>
			<a class="list-group-item list-group-item-action list-group-item-info" onclick="return dowhileloopinc();">do while-loop in C</a>
			<a class="list-group-item list-group-item-action active" id="list-profile-list" data-toggle="list" role="tab" aria-controls="profile" onclick="operatorinc();">Operators in C</a>
			<a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" role="tab" aria-controls="profile" onclick="patternprintingusingoperatorinc();">Pattern printing in C</a>
		    <a class="list-group-item list-group-item-action active" id="list-profile-list" data-toggle="list" role="tab" aria-controls="profile" onclick="return functioninc();">Function in C</a>
			<a class="list-group-item list-group-item-action"  onclick="return functionexampleinc();">Function examples in C</a>
        </div>
    </div>

    <div class="col-sm-8">
        <div class="div-scrollable" id="DisplayDiv">
            <h1>C Language</h1>
            <p>C is the Latin of computer language. The language was developed in 1972 at AT&T Bell Labs by Dennis Ritchie. C language was developed to do system programming for UNIX operating system. It plays a vital role in programming. C Language requires very little space in memory.
             Moreover, everything from the microcontroller to the operating system is written in C. The versatility of C language enables control through minimum commands. The complex program can be written easily due to its rich set of built-in functions. These programs are highly efficient and effective. Many modern programming languages have features that drive from C language.
             <h4><b><u>Steps involved in compilation of C program</u></b></h4>
		   <p>The process of building a program has two steps. The C compiler first converts C source code into the machine-executable format in a stage known as compiling. It then combines the machine instruction from your program with instruction from a set of libraries. It comes standard with c in as second step known as linking to create a complete executable program. Before we start working with "C", we need an "integrated development program or IDE". IDE is an editor that provides many facilities like invoking the compiler quickly without making you switch back, and IDE can provoke quick and efficient means for finding and fixing coding errors. </p>
           <img src="\images\imagetwentytwo.png" class="img-responsive" alt="Cinque Terre">
</p>
           
        </div>
    </div>

</div>

<!-----------------------------------------list view End -------------------------------->

<?php 
    include_once('functions/cfunction.php');
    include_once('footer.php');
	include_once('mobileview.php');
?>