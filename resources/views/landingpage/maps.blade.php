<html>

<head>
    <title>Add Map</title>

</head>
<style>
    #map {
        height: 100%;
    }

    html,
    body {
        height: 100%;
        margin: 0;
        padding: 0;
    }
</style>

{{-- <body>
    <h3>My Google Maps Demo</h3>
    <div id="map"></div>

    <script>(g=>{var h,a,k,p="The Google Maps JavaScript API",c="google",l="importLibrary",q="__ib__",m=document,b=window;b=b[c]||(b[c]={});var d=b.maps||(b.maps={}),r=new Set,e=new URLSearchParams,u=()=>h||(h=new Promise(async(f,n)=>{await (a=m.createElement("script"));e.set("libraries",[...r]+"");for(k in g)e.set(k.replace(/[A-Z]/g,t=>"_"+t[0].toLowerCase()),g[k]);e.set("callback",c+".maps."+q);a.src=`https://maps.${c}apis.com/maps/api/js?`+e;d[q]=f;a.onerror=()=>h=n(Error(p+" could not load."));a.nonce=m.querySelector("script[nonce]")?.nonce||"";m.head.append(a)}));d[l]?console.warn(p+" only loads once. Ignoring:",g):d[l]=(f,...n)=>r.add(f)&&u().then(()=>d[l](f,...n))})
    ({key: "AIzaSyCQ6QJhbrVETVEDBYZhUBpj2dPmGgB8qAE", v: "beta"});</script>
</body> --}}
<script src="js/maps.js"></script>
<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

</html>