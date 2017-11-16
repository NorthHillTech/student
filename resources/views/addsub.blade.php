@extends('layouts.app')

@section('content')
    <br>
    <div class="col-md-10 col-md-offset-1">
    <div id="newlink">

        <div class="row">
            <div class="col-xs-6">
                <p id="addnew">
                    <a class="btn btn-success" style="width:100%" href="javascript:new_link()">Add New Subject</a>
                </p>
            </div>
            <div class="col-xs-6">
                <a class="btn btn-info" style="width:100%" onclick="findTotal()">Calculate SGPA</a>
            </div>
        </div>
        <br>
        <div id="1">
            <div class="row">
                <div class="col-xs-2">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Subject code" />
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Subject name" />
                    </div>
                </div>
                <div class="col-xs-2">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="your marks" />
                    </div>
                </div>
                <div class="col-xs-2">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Total marks" />
                    </div>
                </div>
                <div class="col-xs-2">
                    <div class="form-group">
                        <a class="btn btn-danger" style="width:100%" href="javascript:delIt(1)">Delete</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div id="newlinktpl" style="display:none">
        <div class="row">
            <div class="col-xs-2">
                <div class="form-group"> <input class="form-control" type="text" placeholder="Subject" /></div>
            </div>
            <div class="col-xs-4">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Subject name" />
                </div>
            </div>
            <div class="col-xs-2">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="your marks" />
                </div>
            </div>
            <div class="col-xs-2">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Total marks" />
                </div>
            </div>
            <div class="col-xs-2" id="del"></div>
        </div>
        <input type="hidden" name="total" id="total" value="0" readonly />
    </div>
    </div>
    <script>
        var ct = 1;
        function new_link()
        {
            ct++;
            var div1 = document.createElement('div');
            div1.id = ct;
            // link to delete extended form elements
            var delLink = '<a class="btn btn-danger" style="width:100%" href="javascript:delIt('+ ct +')">Delete</a>';
            //var qq='</div>';
            div1.innerHTML = document.getElementById('newlinktpl').innerHTML ;
            document.getElementById('newlink').appendChild(div1);
            $('#'+ct+' #del').append(delLink);

        }
        // function to delete the newly added set of elements
        function delIt(eleId)
        {
            d = document;
            var ele = d.getElementById(eleId);
            var parentEle = d.getElementById('newlink');
            parentEle.removeChild(ele);
        }
    </script>

@endsection