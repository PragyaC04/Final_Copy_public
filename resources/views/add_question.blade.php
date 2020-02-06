

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add Question</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

 <style>
  h3{ 
      word-spacing: 4px;
      letter-spacing: 1px;
      text-decoration: none;
      font-size: 25px;
   }


  </style>
  
    <script type="text/javascript">
        function validate_q() {
            if( document.qu.q_number.value == "" || isNaN( document.qu.q_number.value ))
            {
                alert( "Please provide a numeric value." );
                document.qu.q_number.focus() ;
                return false;
            }

            var file=document.getElementById('question_image').value;
            if((document.qu.q_content.value == "") && (file==''))
            {
                alert("Enter the question");
                document.qu.q_content.focus();
                return false;
            }
            

            if(document.qu.q_marks.value == "")
            {
                alert("Select appropriate marks");
                document.qu.q_marks.focus();
                return false;
            }

            var file1=document.getElementById('option1_image').value;
            if((document.qu.o1_content.value == "") && (file1==''))
            {
                alert("Enter option1");
                document.qu.o1_content.focus();
                return false;
            }
            var file2=document.getElementById('option2_image').value;
            if((document.qu.o2_content.value == "") && (file2==''))
            {
                alert("Enter option2");                
                document.qu.o2_content.focus();
                return false;
            }
            var file3=document.getElementById('option3_image').value;
            if((document.qu.o3_content.value == "") && (file3==''))
            {
                alert("Enter option3");
                document.qu.o4_content.focus();
                return false;
            }
            var file4=document.getElementById('option4_image').value;
            if((document.qu.o4_content.value == "") && (file4==''))
            {
                alert("Enter option4");
                document.qu.o4_content.focus();
                return false;
            }
            
            if(document.qu.q_option.value == "")
            {
                alert("Select correct option number");
                document.qu.q_option.focus();
                return false;
            }
            return true;
        }

        function validate_a() {
            if( document.an.q_number.value == "" || isNaN( document.an.q_number.value ))
            {
                alert( "Please provide a numeric value." );
                document.an.q_number.focus() ;
                return false;
            }

            var file=document.getElementById('question_image').value;
            if((document.an.q_content.value == "") && (file==''))
            {
                alert("Enter the question");
                document.a.q_content.focus();
                return false;
            }
            

            if(document.an.q_marks.value == "")
            {
                alert("Select appropriate marks");
                document.an.q_marks.focus();
                return false;
            }

            var file1=document.getElementById('option1_image').value;
            if((document.an.o1_content.value == "") && (file1==''))
            {
                alert("Enter option1");
                document.a.o1_content.focus();
                return false;
            }
            var file2=document.getElementById('option2_image').value;
            if((document.an.o2_content.value == "") && (file2==''))
            {
                alert("Enter option2");
                document.a.o2_content.focus();
                return false;
            }
            var file3=document.getElementById('option3_image').value;
            if((document.an.o3_content.value == "") && (file3==''))
            {
                alert("Enter option3");
                document.a.o3_content.focus();
                return false;
            }
            var file4=document.getElementById('option4_image').value;
            if((document.an.o4_content.value == "") && (file4==''))
            {
                alert("Enter option4");
                document.a.o4_content.focus();
                return false;
            }
            
            if(document.an.q_option.value == "")
            {
                alert("Select correct option number");
                document.an.q_option.focus();
                return false;
            }
            return true;
        }


        function validate_cr() {
            if( document.cr.q_number.value == "" || isNaN( document.cr.q_number.value ))
            {
                alert( "Please provide a numeric value." );
                document.cr.q_number.focus() ;
                return false;
            }

            var file=document.getElementById('question_image').value;
            if((document.cr.q_content.value == "") && (file==''))
            {
                alert("Enter the question");
                document.cr.q_content.focus() ;
                return false;
            }
            

            if(document.cr.q_marks.value == "")
            {
                alert("Select appropriate marks");
                document.cr.q_marks.focus();
                return false;
            }

            var file1=document.getElementById('option1_image').value;
            if((document.cr.o1_content.value == "") && (file1==''))
            {
                alert("Enter option1");
                document.cr.o1_content.focus() ;
                return false;
            }
            var file2=document.getElementById('option2_image').value;
            if((document.cr.o2_content.value == "") && (file2==''))
            {
                alert("Enter option2");
                document.cr.o2_content.focus() ;
                return false;
            }
            var file3=document.getElementById('option3_image').value;
            if((document.cr.o3_content.value == "") && (file3==''))
            {
                alert("Enter option3");
                document.cr.o3_content.focus() ;
                return false;
            }
            var file4=document.getElementById('option4_image').value;
            if((document.cr.o4_content.value == "") && (file4==''))
            {
                alert("Enter option4");
                document.cr.o4_content.focus() ;
                return false;
            }
            
            if(document.cr.q_option.value == "")
            {
                alert("Select correct option number");
                document.cr.q_option.focus();
                return false;
            }
            return true;
        }


        function validate_co() {
            if( document.co.q_number.value == "" || isNaN( document.co.q_number.value ))
            {
                alert( "Please provide a numeric value." );
                document.co.q_number.focus() ;
                return false;
            }

            var file=document.getElementById('question_image').value;
            if((document.co.q_content.value == "") && (file==''))
            {
                alert("Enter the question");
                document.co.q_content.focus() ;
                return false;
            }
            

            if(document.co.q_marks.value == "")
            {
                alert("Select appropriate marks");
                document.co.q_marks.focus();
                return false;
            }

            var file1=document.getElementById('option1_image').value;
            if((document.co.o1_content.value == "") && (file1==''))
            {
                alert("Enter option1");
                document.co.o1_content.focus() ;
                return false;
            }
            var file2=document.getElementById('option2_image').value;
            if((document.co.o2_content.value == "") && (file2==''))
            {
                alert("Enter option2");
                document.co.o2_content.focus() ;
                return false;
            }
            var file3=document.getElementById('option3_image').value;
            if((document.co.o3_content.value == "") && (file3==''))
            {
                alert("Enter option3");
                document.co.o3_content.focus() ;
                return false;
            }
            var file4=document.getElementById('option4_image').value;
            if((document.co.o4_content.value == "") && (file4==''))
            {
                alert("Enter option4");
                document.co.o4_content.focus() ;
                return false;
            }
            
            if(document.co.q_option.value == "")
            {
                alert("Select correct option number");
                document.co.q_option.focus();
                return false;
            }
            return true;
        }
    </script>
</head>
<body>

<!-------------------------------------------- QUALITATIVE SECTION START ----------------------------------------------------------------->
@if($sect == 'qualitative')

    <div class="container">
        <h3>Qualitative Analysis Section</h3>
        <br>
        
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        

        <form name="qu" onsubmit = "return(validate_q());" action = "{{ action('Test_TeacherController@qual_store') }}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
        <input type="hidden" value="{{$a}}" name="test_id">
        <input type="hidden" value="{{$b}}" name="test_n">
        <input type="hidden" value="qualitative" name="section">
        <div class="card">
            <div class="card-header">
                <div class="form-group">
                    <label>Question No.</label>
                    <input type="text" name="q_number" class="form-control" placeholder="enter question number">
                </div>

                <div class="form-group">
                    <label>Question Content</label>
                    <input type="text" id="q_content" name="q_content" class="form-control" placeholder="enter content of question">
                </div>

                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" id="question_image" name="question_image" class="custom-file-input">
                        <label class="custom-file-label">Upload question image</label>
                    </div>
                </div><br>

                <div class="form-group">
                    <label>Marks</label>
                    <select name="q_marks" class="form-control" id="q_marks">
                        <option value="">Select marks</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>SetId</label>
                    <input type="text" name="sid" class="form-control"  value="{{$a}}" readonly>
                </div>
            </div>
            
            
            <div class="card-body">
                <div class="form-group">
                    <label>Option1 Content</label>
                    <input type="text" name="o1_content" class="form-control" placeholder="enter content of option">
                </div>

                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" id="option1_image" name="option1_image" class="custom-file-input">
                        <label class="custom-file-label">Upload option image</label>
                    </div>
                </div><br>

                <div class="form-group">
                    <label>Option2 Content</label>
                    <input type="text" name="o2_content" class="form-control" placeholder="enter content of option">
                </div>

                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" id="option2_image" name="option2_image" class="custom-file-input">
                        <label class="custom-file-label">Upload option image</label>
                    </div>
                </div><br>

                <div class="form-group">
                    <label>Option3 Content</label>
                    <input type="text" name="o3_content" class="form-control" placeholder="enter content of option">
                </div>

                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" id="option3_image" name="option3_image" class="custom-file-input">
                        <label class="custom-file-label">Upload option image</label>
                    </div>
                </div><br>

                <div class="form-group">
                    <label>Option4 Content</label>
                    <input type="text" name="o4_content" class="form-control" placeholder="enter content of option">
                </div>

                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" id="option4_image" name="option4_image" class="custom-file-input">
                        <label class="custom-file-label">Upload option image</label>
                    </div>
                </div><br>
                

                <div class="form-group">
                    <label>Correct option</label>
                    <select name="q_option" class="form-control" id="q_option">
                        <option value="">Select correct option number</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>

{{-- 
                <div class="form-group">
                    <label>Correct option</label>
                    <input type="text" name="correct" class="form-control" placeholder="enter correct option">
                </div> --}}
            </div> 

            <div class="card-footer">
                <button type="submit" name="submit" value="submit" class="btn btn-primary">Save data</button>
            </div>
        </div>
        </form>
        <form action="{{action('Test_TeacherController@display')}}" method="GET">
        <input type="hidden" value="{{$a}}" name="test_id">
        <input type="hidden" value="{{$b}}" name="test_n">
        <input type="hidden" value="qualitative" name="section">
        <button type="submit" class="btn btn-primary">Back</button>
        </form>
    </div>
@endif
<!----------------------------------------------- QUALITATIVE SECTION END ------------------------------------------------------------------>


<!---------------------------------------------- ANALYTICAL SECTION START ------------------------------------------------------------------->
@if($sect=='analytical')
 
    <div class="container">
        <h3>Analytical Analysis Section</h3>
      <br>

      @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form name="an" onsubmit = "return(validate_a());"  action = "{{ action('Test_TeacherController@analy_store') }}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
        <input type="hidden" value="{{$a}}" name="test_id">
        <input type="hidden" value="{{$b}}" name="test_n">
        <input type="hidden" value="analytical" name="section">
        <div class="card">
            <div class="card-header">
                <div class="form-group">
                    <label>Question No.</label>
                    <input type="text" name="q_number" class="form-control" value={{}} readonly{{-- placeholder="enter question number" --}}>
                </div>

                <div class="form-group">
                    <label>Question Content</label>
                    <input type="text" name="q_content" class="form-control" placeholder="enter content of question">
                </div>

                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" id="question_image" name="question_image" class="custom-file-input">
                        <label class="custom-file-label">Upload question image</label>
                    </div>
                </div><br>

                <div class="form-group">
                    <label>Marks</label>
                    <select name="q_marks" class="form-control" id="q_marks">
                        <option value="">Select marks</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>                
                </div>

                <div class="form-group">
                    <label>SetId</label>
                    <input type="text" name="sid" class="form-control"  value="{{$a}}" readonly>
                </div>
            </div>
            
            
            <div class="card-body">
                <div class="form-group">
                    <label>Option1 Content</label>
                    <input type="text" name="o1_content" class="form-control" placeholder="enter content of option">
                </div>

                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" id="option1_image" name="option1_image" class="custom-file-input">
                        <label class="custom-file-label">Upload option image</label>
                    </div>
                </div><br>

                <div class="form-group">
                    <label>Option2 Content</label>
                    <input type="text" name="o2_content" class="form-control" placeholder="enter content of option">
                </div>

                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" id="option2_image" name="option2_image" class="custom-file-input">
                        <label class="custom-file-label">Upload option image</label>
                    </div>
                </div><br>

                <div class="form-group">
                    <label>Option3 Content</label>
                    <input type="text" name="o3_content" class="form-control" placeholder="enter content of option">
                </div>

                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" id="option3_image" name="option3_image" class="custom-file-input">
                        <label class="custom-file-label">Upload option image</label>
                    </div>
                </div><br>

                <div class="form-group">
                    <label>Option4 Content</label>
                    <input type="text" name="o4_content" class="form-control" placeholder="enter content of option">
                </div>

                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" id="option4_image" name="option4_image" class="custom-file-input">
                        <label class="custom-file-label">Upload option image</label>
                    </div>
                </div><br>

                <div class="form-group">
                    <label>Correct option</label>
                    <select name="q_option" class="form-control" id="q_option">
                        <option value="">Select correct option number</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>
            </div> 
            
            <div class="card-footer">
                <button type="submit" name="submit" class="btn btn-primary">Save data</button>
            </div>
        </div>
        </form>
        <form action="{{action('Test_TeacherController@display')}}" method="GET">
        <input type="hidden" value="{{$a}}" name="test_id">
        <input type="hidden" value="{{$b}}" name="test_n">
        <input type="hidden" value="analytical" name="section">
        <button type="submit" class="btn btn-primary">Back</button>
        </form>
    </div>
@endif
<!--------------------------------------------- ANALYTICAL SECTION END ---------------------------------------------------------------------->


<!------------------------------------------ CREATIVE SECTION START ------------------------------------------------------------------------->

@if($sect=='creative')
    <div class="container">
        <h3>Creative Analysis Section</h3>
        <br>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form name="cr" onsubmit = "return(validate_cr());" action = "{{ action('Test_TeacherController@creat_store') }}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
        <input type="hidden" value="{{$a}}" name="test_id">
        <input type="hidden" value="{{$b}}" name="test_n">
        <input type="hidden" value="creative" name="section">
        <div class="card">
            <div class="card-header">
                <div class="form-group">
                    <label>Question No.</label>
                    <input type="text" name="q_number" class="form-control" placeholder="enter question number">
                </div>

                <div class="form-group">
                    <label>Question Content</label>
                    <input type="text" name="q_content" class="form-control" placeholder="enter content of question">
                </div>

                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" id="question_image" name="question_image" class="custom-file-input">
                        <label class="custom-file-label">Upload question image</label>
                    </div>
                </div><br>

                <div class="form-group">
                    <label>Marks</label>
                    <select name="q_marks" class="form-control" id="q_marks">
                        <option value="">Select marks</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select> 
                </div>

                <div class="form-group">
                    <label>SetId</label>
                    <input type="text" name="sid" class="form-control" value="{{$a}}" readonly>
                </div>
            </div>
            
            
            <div class="card-body">
                <div class="form-group">
                    <label>Option1 Content</label>
                    <input type="text" name="o1_content" class="form-control" placeholder="enter content of option">
                </div>

                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" id="option1_image" name="option1_image" class="custom-file-input">
                        <label class="custom-file-label">Upload option image</label>
                    </div>
                </div><br>

                <div class="form-group">
                    <label>Option2 Content</label>
                    <input type="text" name="o2_content" class="form-control" placeholder="enter content of option">
                </div>

                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" id="option2_image" name="option2_image" class="custom-file-input">
                        <label class="custom-file-label">Upload option image</label>
                    </div>
                </div><br>

                <div class="form-group">
                    <label>Option3 Content</label>
                    <input type="text" name="o3_content" class="form-control" placeholder="enter content of option">
                </div>

                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" id="option3_image" name="option3_image" class="custom-file-input">
                        <label class="custom-file-label">Upload option image</label>
                    </div>
                </div><br>

                <div class="form-group">
                    <label>Option4 Content</label>
                    <input type="text" name="o4_content" class="form-control" placeholder="enter content of option">
                </div>

                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" id="option4_image" name="option4_image" class="custom-file-input">
                        <label class="custom-file-label">Upload option image</label>
                    </div>
                </div><br>

                <div class="form-group">
                    <label>Option5 Content</label>
                    <input type="text" name="o5_content" class="form-control" placeholder="enter content of option">
                </div>

                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" id="option5_image" name="option5_image" class="custom-file-input">
                        <label class="custom-file-label">Upload option image</label>
                    </div>
                </div><br>

                <div class="form-group">
                    <label>Correct option</label>
                    <select name="q_option" class="form-control" id="q_option">
                        <option value="">Select correct option number</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
            </div> 

            <div class="card-footer">
                <button type="submit" name="submit" class="btn btn-primary">Save data</button>
            </div>
        </div>
        </form>
        <form action="{{action('Test_TeacherController@display')}}" method="GET">
        <input type="hidden" value="{{$a}}" name="test_id">
        <input type="hidden" value="{{$b}}" name="test_n">
        <input type="hidden" value="creative" name="section">
        <button type="submit" class="btn btn-primary">Back</button>
        </form>
    </div>
@endif
<!------------------------------------------ CREATIVE SECTION END ------------------------------------------------------------------------->


<!------------------------------------------ COMPREHENSION SECTION START ------------------------------------------------------------------------->

@if($sect=='comprehension')
    <div class="container">
        <h3>Comprehension Section</h3>
       <br>
       @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <form name="co" onsubmit = "return(validate_co());" action = "{{ action('Test_TeacherController@comp_store') }}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
        <input type="hidden" value="{{$a}}" name="test_id">
        <input type="hidden" value="{{$b}}" name="test_n">
        <input type="hidden" value="comprehension" name="section">
        <div class="card">
            <div class="card-header">
                <div class="form-group">
                    <label>Paragraph</label>
                    <input type="text" name="para" class="form-control" placeholder="enter the paragraph">
                </div>

                <div class="form-group">
                    <label>Question No.</label>
                    <input type="text" name="q_number" class="form-control" placeholder="enter question number">
                </div>

                <div class="form-group">
                    <label>Question Content</label>
                    <input type="text" name="q_content" class="form-control" placeholder="enter content of question">
                </div>

                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" id="question_image" name="question_image" class="custom-file-input">
                        <label class="custom-file-label">Upload question image</label>
                    </div>
                </div><br>

                <div class="form-group">
                    <label>Marks</label>
                    <select name="q_marks" class="form-control" id="q_marks">
                        <option value="">Select marks</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select> 
                </div>

                <div class="form-group">
                    <label>SetId</label>
                    <input type="text" name="sid" class="form-control" value="{{$a}}" readonly>
                </div>
            </div>
            
            
            <div class="card-body">
                <div class="form-group">
                    <label>Option1 Content</label>
                    <input type="text" name="o1_content" class="form-control" placeholder="enter content of option">
                </div>

                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" id="option1_image" name="option1_image" class="custom-file-input">
                        <label class="custom-file-label">Upload option image</label>
                    </div>
                </div><br>

                <div class="form-group">
                    <label>Option2 Content</label>
                    <input type="text" name="o2_content" class="form-control" placeholder="enter content of option">
                </div>

                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" id="option2_image" name="option2_image" class="custom-file-input">
                        <label class="custom-file-label">Upload option image</label>
                    </div>
                </div><br>

                <div class="form-group">
                    <label>Option3 Content</label>
                    <input type="text" name="o3_content" class="form-control" placeholder="enter content of option">
                </div>

                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" id="option3_image" name="option3_image" class="custom-file-input">
                        <label class="custom-file-label">Upload option image</label>
                    </div>
                </div><br>

                <div class="form-group">
                    <label>Option4 Content</label>
                    <input type="text" name="o4_content" class="form-control" placeholder="enter content of option">
                </div>

                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" id="option4_image" name="option4_image" class="custom-file-input">
                        <label class="custom-file-label">Upload option image</label>
                    </div>
                </div><br>

                <div class="form-group">
                    <label>Correct option</label>
                    <select name="q_option" class="form-control" id="q_option">
                        <option value="">Select correct option number</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                   </select>
                </div>
            </div> 
            
            <div class="card-footer">
                <button type="submit" name="submit" class="btn btn-primary">Save data</button>
            </div>
        </div>
        </form>
        <form action="{{action('Test_TeacherController@display')}}" method="GET">
        <input type="hidden" value="{{$a}}" name="test_id">
        <input type="hidden" value="{{$b}}" name="test_n">
        <input type="hidden" value="comprehension" name="section">
        <button type="submit" class="btn btn-primary">Back</button>
        </form>
    </div>
@endif

<!------------------------------------------ COMPREHENSION SECTION END ------------------------------------------------------------------------->

</body>
</html>
