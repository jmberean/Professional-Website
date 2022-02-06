<?php include 'header.php';?>
<style>
* { margin: 0; padding: 0; }
.terminal {
    border-radius: 5px 5px 0 0;
    position: relative;
}
.terminal .top {
    background: #E8E6E8;
    color: black;
    padding: 5px;
    border-radius: 5px 5px 0 0;
}
.terminal .btns {
    position: absolute;
    top: 7px;
    left: 5px;
}
.terminal .circle {
    width: 12px;
    height: 12px;
    display: inline-block;
    border-radius: 15px;
    margin-left: 2px;
    border-width: 1px;
    border-style: solid;
}
.title{
    text-align: center;
}
.red { background: #EC6A5F; border-color: #D04E42; }
.green { background: #64CC57; border-color: #4EA73B; }
.yellow{ background: #F5C04F; border-color: #D6A13D; }
.clear{clear: both;}
.terminal .body {
    background: black;
    color: #7AFB4C;
    padding: 8px;
    overflow: auto;
    font-size:0.6em;
}
.space {
    margin: 25px;
}
.shadow { box-shadow: 0px 0px 10px rgba(0,0,0,.4)}
div.hidden{
        display: none
    }
</style>
<div class="hidden">

<div class="terminal space shadow" style="margin-top:0px">
    <div class="top">
        <div class="btns">
            <span class="circle red"></span>
            <span class="circle yellow"></span>
            <span class="circle green"></span>
        </div>
        <div class="title">Resume</div>
    </div>

    <pre class="body">
<span style="font-size:30px">C:\User\ John M Berean</span>
    
    <div class="row">
    <div class="column">
    Strong communicator and team player. 
    Resilient programmer and problem solver. 
    Results driven achiever with strong planning 
    and organizational skills. 
    Analytical thinker with a passion to improve processes. 

    <span style="font-size:25px;text-decoration: underline;">Education</span>

    B.S. in Computer Science
    SUNY New Paltz, NY
    01/17 – 05/19

    A.A. in Liberal Arts & Science	
    Rockland Community College (RCC), NY
    09/13 – 12/17	

    <span style="font-size:25px;text-decoration: underline;">Coding Skills</span>

    Profficient:    CSS, HTML, Java, C++, PHP, MySQL
    Familair:       Python, JavaScript       

    <span style="font-size:25px;text-decoration: underline;">Technical Skills</span>

    • Assembly language 
    • Calculus
    • Computer systems
    • Compiler construction
    • Database management systems
    • Data structures
    • Discrete mathematics
    • Digital logic
    • Full stack web development
    • Object oriented programming
    • Operating systems design
    • RESTful API development 
    • Software engineering
    </div>
        <div class="column">
                                                                    845-709-0867
                                                              jmberean@gmail.com  
                                                                    New City, NY
                                                      cs.newpaltz.edu/~bereanj1/
                                                             github.com/jmberean

<span style="font-size:25px;text-decoration: underline;">Softare Projects</span>

Shakespeare Portfolio
 
CS Q/A

Charter Company Inc. 				
Effectively collaborated with fellow team-members to launch a full software package 
aimed to keep records for a Charter company: 
-	Java, MySQL. 
                                                                    01/18 – 05/18
Lava							
Successfully launched a full stack web application for students to keep their 
scholastic records: 
-	HTML, CSS, VueJS, ExpressJS, NodeJS and SQLite.
                                                                    01/18 – 05/18

<span style="font-size:25px;text-decoration: underline;">Work Expereince</span>

Programming and Mathematics Tutor 
- Java, JavaScript, MySQL and Calculus.
                                                                    SUNY New Paltz
                                                                    01/17 – 05/19

- C++, HTML, CSS, JavaScript, Calculus, Pre-calculus and lower level math’s.
                                                                RCC Tutoring Center
                                                                    01/16 – 12/17

Instructor 
Taught the T.E.E.N. Works curriculum through classroom and on-site based teachings, 
aimed to provide eligible youth with a meaningful experience in the workforce 
through  pre-employment training and experiential activities. Successfully graduated 
two classes, all students were then placed in employment.
                                                        Rockland County Youth Bureau
                                                                        07/14 – 05/15

<span style="font-size:25px;text-decoration: underline;">Achievements / Organizations</span>

• SUNY New Paltz Dean’s list. 			        01/18 – 05/19
• Founder and President of the “CSTEAM” 	    01/18 – 05/19
  computer science club at SUNY New Paltz. 	   
• Black Belt in MMA.				              2000 – 2008

        </div>
    </div>
    </pre>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $('div.hidden').fadeIn(2000).removeClass('hidden');
    });
    </script>
<?php include 'footer.php';?>
