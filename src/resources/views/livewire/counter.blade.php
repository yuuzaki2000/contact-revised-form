<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        #overlay {
            position:fixed;
            top:0;
            left:0;
            width:100%;
            height:100%;
            background-color: rgba(0,0,0,0.5);

            display: flex;
            align-items: center;
            justify-content: center;
        }
        #content {
            z-index:2;
            width:50%;
            padding:1em;
            background:#fff;
        }
    </style>
</head>
<body>
    <div>
        {{-- The best athlete wants his opponent at his best. --}}
        <div>
            <h2>{{$count}}</h2>
            <p><button wire:click="inc">+1</button></p>
            <p><button wire:click="changeShow">Click</button></p>
        </div>
        @if ($show == true)
        <div id="overlay">
            <div id="content">
                <p>これがモーダルウィンドウです</p>
                <p><button wire:click="changeShow">close</button></p>
            </div>
        </div>
        @endif
    </div>    
</body>
</html>