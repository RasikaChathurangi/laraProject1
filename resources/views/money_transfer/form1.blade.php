<html>
    <head>
        <link rel="stylesheet" href="{{ asset('CSS/form1.css') }}">
        <title>Form 1</title>
    </head>
<body>

<!-- JQUERY STEP -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-steps/1.1.0/jquery.steps.min.js"></script>
<div class="wrapper">
    <form  method="post" action="{{     route('forms.store')   }}"  enctype="multipart/form-data">
        @csrf
        <div id="wizard">

            <!-- SECTION 1 -->
            <h4></h4>
            <section>
            


                <div class="form-row">
                     <input type="text" name="name" class="form-control" placeholder="Full Name" required>
                </div>
                <div class="form-row">
                     <input type="text" name="num" class="form-control" placeholder="Student Number" required>
                </div>
                <div class="form-row">
                     <input type="text" name="address" class="form-control" placeholder="Address" required>
                </div>
                <div class="form-row">
                     <input type="text" name="amount" class="form-control" placeholder="Amount" required>
                </div>
            </section> 
            
            <!-- SECTION 2 -->
            <h4></h4>
            <section>
                <div class="dropdown">
                <label for="degree">Choose a degree:</label>
                    <select name="degree" id="degree">
                    <option class="dropdown-btn" value="basic">Basic Degree</option>
                    <option class="dropdown-btn" value="post">Postgraduation Degree</option>
                    </select>
                </div>

                <fieldset>
                    <legend>Choose Level and Semester:</legend>
                    <div class="checks">
                        <div>
                            <input type="checkbox" id="level1" name="level1"  />
                            <label for="level1">Level 1</label>
                        </div>
                        <div>
                            <input type="checkbox" id="sem1" name="sem1"  />
                            <label for="sem1">Semester 1</label>
                        </div>
                        <div>
                            <input type="checkbox" id="sem2" name="sem2" />
                            <label for="sem2">Semester 2</label>
                        </div>
                    </div>

                    <div class="checks">
                        <div>
                            <input type="checkbox" id="level1" name="level1"  />
                            <label for="level1">Level 2</label>
                        </div>
                        <div>
                            <input type="checkbox" id="sem1" name="sem1"  />
                            <label for="sem1">Semester 1</label>
                        </div>
                        <div>
                            <input type="checkbox" id="sem2" name="sem2" />
                            <label for="sem2">Semester 2</label>
                        </div>
                    </div>
                
                    <div class="checks">
                        <div>
                            <input type="checkbox" id="level1" name="level1"  />
                            <label for="level1">Level 3</label>
                        </div>
                        <div>
                            <input type="checkbox" id="sem1" name="sem1"  />
                            <label for="sem1">Semester 1</label>
                        </div>
                        <div>
                            <input type="checkbox" id="sem2" name="sem2" />
                            <label for="sem2">Semester 2</label>
                        </div>
                        </div>

                        
                        <div class="align-right"> 
                            <a  href="{{  url('pay')  }}">
                            OK
                            </a>
                        </div>

                        
                </fieldset>
                <br>
                <div>
                    <input type="file" name="file">
                </div>
                        

                <div class="area">
                    <div class="form-row" style="margin-bottom: 18px"> 
                    <textarea name="" id="" class="form-control" placeholder="Note about Course Units" style="height: 108px">
                    <h1>Retrieved Data</h1>

<ul>
    @foreach ($data as $item)
        <li>{{ $item->column1 }} - {{ $item->column2 }}</li>
    @endforeach
</ul>
                    </textarea> 
                </div>
                </div>
            </section>
            
            
            <!-- SECTION 4 -->
            <section>
                <div class="btn1">
                
                    <button type="submit">Submit</button>
                
                </div>

                
                
            </section>
        
        </div>
    </form>
</div>
</body>
</html>

