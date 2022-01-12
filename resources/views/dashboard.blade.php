<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: "Roboto", sans-serif;
        }

        header {
            z-index: 1;
            position: fixed;
            background: #22242A;
            padding: 20px;
            width: calc(100% - 0%);
            top: 0;
            height: 30px;
        }

        .left_area h3{
            color: #fff;
            margin: 0;
            text-transform: uppercase;
            font-size: 20px;
            font-weight: 900;
        }

        .left_area span{
            color: #19B3D3;
        }

        .logout_btn{
            padding: 5px;
            background: #19B3D3;
            text-decoration: none;
            float: right;
            margin-top: -30px;
            margin-right: 70px;
            border-radius: 2px;
            font-size: 15px;
            font-weight: 600;
            color: #fff;
            transition: 0.5s;
            transition-property: background;
        }

        .sidebar{
            z-index: 1;
            top: 0;
            background: #2f323a;
            margin-top: 70px;
            padding-top: 30px;
            position: fixed;
            left: 0;
            width: 250px;
            height: calc(100% - 9%);
            transition: 0.5s;
            transition-property: left;
            overflow-y: auto;
        }

        .profile_info{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .sidebar .profile_info .profile_image{
            width: 100px;
            height: 100px;
            border-radius: 100px;
            margin-bottom: 10px;
        }

        .sidebar .profile_info h4{
            color: #ccc;
            margin-top: 0;
            margin-bottom: 20px;
        }

        .sidebar a{
            color: #fff;
            display: block;
            width: 100%;
            line-height: 60px;
            text-decoration: none;
            padding-left: 40px;
            box-sizing: border-box;
            transition: 0.5s;
            transition-property: background;
        }

        .sidebar a:hover{
            background: #19B3D3;
        }

        .sidebar i{
            padding-right: 10px;
        }
        
        label #sidebar_btn{
            z-index: 1;
            color: #fff;
            position: fixed;
            cursor: pointer;
            left: 300px;
            font-size: 20px;
            margin: 5px 0;
            transition: 0.5s;
            transition-property: color;
        }

        label #sidebar_btn:hover{
            color: #19B3D3;
        }

        #check:checked ~ .sidebar{
            left: -185px;
        }

        #check:checked ~ .sidebar a span{
            display: none;
        }

        #check:checked ~ .sidebar a{
            font-size: 20px;
            margin-left: 165px;
            width: 100%
        }

        .content{
            width: 100% - 250px;
            margin-top: 40px;   
            padding: 20px;
            margin-left: 250px;
            background: url('{{url("/images/bg.png")}}') no-repeat;
            background-position: center;
            background-size: cover;
            height: 100vh;
            transition: 0.5s;
        }

        #check:checked ~ .content{
            margin-left: 60px;
        }

        #check:checked ~ .sidebar .profile_info{
            display: none;
        }

        #check{
            display: none;
        }

        .mobile_nav{
            display: none;
        }

        .grid{
            margin: 50px;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 30px;
            align-items: center;
        }

        .grid > article{
            background: #eee5e9;
            border: none;
            box-shadow: 2px 2px 6px 0px rgba(0, 0, 0, 0.3);
            border-radius: 20px;
            text-align: center;
            width: 250px;
            transition: transform .3s;
        }

        .grid > article:hover{
            transform: translateY(5px);
            box-shadow: 2px 2px 26px 0px rgba(0, 0, 0, 0.3);
        }

        .text{
            padding: 20px 20px 20px;
        }

        .edit_btn{
            display: block;
            background: #19B3D3;
            border-radius: 20px;
            border: none;
            color: #fff;
            padding: 10px;
            width: 92%;
            font-weight: 600;
            cursor: pointer;
        }


        @media screen and (max-width: 780px) {
            .sidebar{
                display: none;
            }

            #sidebar_btn{
                display: none;
            }

            .content{
                margin-left: 0;
                margin-top: 0;
                padding: 10px 20px;
                transition: 0s;
            }

            #check:checked ~ .content{
                margin-left: 0;
            }

            .mobile_nav{
                display: block;
                width: calc(100% - 0%);
            }

            .nav_bar{
                background: #222;
                width: calc(100% - 0%);
                margin-top: 70px;
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 10px 20px;
            }

            .nav_bar .mobile_profile_image{
                width: 50px;
                height: 50px;
                border-radius: 50%;
            }

            .nav_bar .nav_btn{
                color: #fff;
                font-size: 22px;
                cursor: pointer;
                transition: 0.5s;
                transition-property: color;
            }

            .nav_bar .nav_btn:hover{
                color: #19B3D3;
            }

            .mobile_nav_items{
                background: #2f323a;
            }

            .mobile_nav_items a{
                color: #fff;
                display: block;
                text-align: center;
                letter-spacing: 1px;
                line-height: 60px;
                text-decoration: none;
                box-sizing: border-box;
                transition: 0.5s;
                transition-property: background;
            }

            .mobile_nav_items a:hover{
                background: #19B3D3;
            }

            .mobile_nav_items i{
                padding-right: 10px;
            }
        }

        @media (max-width: 768px) {
            .grid{
                grid-template-columns: repeat(1, 1fr);
            }
        }
    </style>
</head>
<body>
    
    <input type="checkbox"  id="check">

    <header>
        <label for="check">
            <i class="fas fa-bars" id="sidebar_btn"></i>
        </label>
        <div class="left_area">
            <h3>Dashboard <span>Task-List</span></h3>
        </div>
        <div class="right_area">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a href="{{ route('logout') }}" class="logout_btn" onclick="event.preventDefault();this.closest('form').submit();">Logout</a>
            </form>
        </div>
    </header>

    <div class="mobile_nav">
        <div class="nav_bar">
            <img src="{{url('/images/profile.jpg')}}" class="mobile_profile_image" alt=""> 
        </div>
        <div class="mobile_nav_items">
            <a href="{{ route('dashboard') }}" class="fas fa-desktop"><span> Dashboard</span></a>
            <a href="{{ route('profile.show') }}" class="fas fa-user"><span> Profile</span></a>
            <a href="/task" class="fa fa-plus-circle"><span> Add New Task</span></a>
        </div>
    </div>

    <div class="sidebar">
        <div class="profile_info">
            <img src="{{url('/images/profile.jpg')}}" class="profile_image">
            <h4>{{ Auth::user()->name }}</h4>
        </div>
        <a href="{{ route('dashboard') }}" class="fas fa-desktop"><span> Dashboard</span></a>
        <a href="{{ route('profile.show') }}" class="fas fa-user"><span> Profile</span></a>
        <a href="/task" class="fa fa-plus-circle"><span> Add New Task</span></a>
    </div>

    <div class="content">
        <main class="grid">
            @foreach(auth()->user()->tasks as $task)
                <article>
                    <div class="text">{{$task->description}}</div>
                    <a href="/task/{{$task->id}}" class="edit_btn" name="edit">edit</a>
                </article>
            @endforeach
        </main>
    </div>

</body>
</html>

<!--
    <form action="/task/{{$task->id}}" class="inline-block">
        <button type="submit" name="delete" formmethod="POST" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button>
            {{ csrf_field() }}
    </form>
 -->