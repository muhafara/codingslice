<?php 
    include_once('header.php');
?>


<div class="jumbotron">
    <div class="header_style">
        <h1 align="center">C++ Languages</h1>
    </div>
    <p align="center">C++ language samples code</p>
</div>

<!-----------------------------------------list view -------------------------------->


<div class="mobileSideBar">
    <img src="images/threelines.png" alt="Click to Toggle sidebar Menu">
</div>




<div class="row">
    <div class="col-sm-4">
        <div class="list-group" id="list-tab" role="tablist">
            <a class="list-group-item list-group-item-action active" id="list-profile-list" data-toggle="list" href="c++.php" role="tab">C++</a>
            <a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" role="tab"  onclick="return simplehelloworldprogram();">Simple C++ program</a>
            <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" role="tab"  onclick="return commentsincplus();">Comments in C++</a>
			<a class="list-group-item list-group-item-action active" id="list-profile-list" data-toggle="list" role="tab" onclick="return keywordsincplus();">Keywords in C++</a>
			<a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" role="tab"  onclick="return escapesequenceincplus();">Escape sequence in C++</a>
			<a class="list-group-item list-group-item-action active" id="list-profile-list" data-toggle="list" role="tab" onclick="return asciitableincplus();">ASCII Codes</a>
			<a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" role="tab"  onclick="return datatypeincplus();">Data types & Variables in C++</a>
			<a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" role="tab"  onclick="return integerincplus();">Integers in C++</a>
			<a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" role="tab"  onclick="return charscterincplus();">Char in C++</a>
			<a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" role="tab"  onclick="return floatincplus();">Float in C++</a>
			<a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" role="tab"  onclick="return stringincplusplus();">Strings in C++</a>
			<a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" role="tab"  onclick="return enumerateddatatypeincplusenum();">Enum in C++</a>
			<a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" role="tab"  onclick="return basicinputandoutputincplus();">Basic input and output in C++</a>
			<a class="list-group-item list-group-item-action" onclick="return simpleexampleusingcinandcoutincplus();">Simple examples(How to get data from user and print on screen)</a>
			<a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" role="tab"  onclick="return controlstatementincplus();">Control statement in C++</a>
			<a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" role="tab"  onclick="return ifstatementincplus();">if statement in C++</a>
			<a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" role="tab"  onclick="return switchcaseincplus();">Switch in C++</a>
			<a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" role="tab"  onclick="return conditionaloperatorincplus();">Conditional Operator Statement in C++</a>
			<a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" role="tab"  onclick="return gotostamentincplus();">GoTo Statement in C++</a>
			<a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" role="tab"  onclick="return loopsincplus();">Loops in C++</a>
			<a class="list-group-item list-group-item-action list-group-item-info" onclick="return forloopincplus();">for-loop in C++</a>
			<a class="list-group-item list-group-item-action list-group-item-info" onclick="return whileloopincplus();">while-loop in C++</a>
			<a class="list-group-item list-group-item-action list-group-item-info" onclick="return dowhileloopincplus();">do while-loop in in C++</a>
			<a class="list-group-item list-group-item-action active" id="list-profile-list" data-toggle="list" href="#Datatype" role="tab" aria-controls="profile" onclick="operatorincplus();">Operators in C++</a>
			<a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#Datatype" role="tab" aria-controls="profile" onclick="patternprintingusingoperatorincplus();">Pattern printing in C++</a>
		    <a class="list-group-item list-group-item-action active" id="list-profile-list" data-toggle="list" href="#Datatype" role="tab" aria-controls="profile" onclick="return functionincplus();">Function in C++</a>
			<a class="list-group-item list-group-item-action"  onclick="return functionexampleincplus();">Function examples in C++</a>			
			</div>
    </div>

    <div class="col-sm-8">
        <div class="div-scrollable" id="DisplayDiv">
           <p>
		   C++ is developed by "Bjarne Stroustrup". It is the extension of c language. C++ is cross-platform, and it is used to create high-level programs which give programmers a comprehensive control over the program.
		   </p>
		   <h4><b><u>Steps involved in compilation of C++ program</u></b></h4>
		   <p>The process of building a program has two steps. The C++ compiler first converts C++ source code into the machine-executable format in a stage known as compiling. It then combines the machine instruction from your program with instruction from a set of libraries. It comes standard with c++ in as second step known as linking to create a complete executable program. Before we start working with "C++", we need an "integrated development program or IDE". IDE is an editor that provides many facilities like invoking the compiler quickly without making you switch back, and IDE can provoke quick and efficient means for finding and fixing coding errors. </p>
           <img src="\images\imagetwentytwo.png" class="img-responsive" alt="Cinque Terre">
		</div>
    </div>

</div>

<!-----------------------------------------list view End -------------------------------->

<?php 
    include_once('functions/cplusfunction.php');
    include_once('footer.php');
	include_once('mobileview.php');
?>