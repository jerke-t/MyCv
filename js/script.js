function GetCurrentPage(){
        document.getElementById("index").className = "inactivePage";
        document.getElementById("cv").className = "inactivePage";
        document.getElementById("contact").className = "inactivePage";
        document.getElementById("about").className = "inactivePage";
        var path = location.pathname;
        var res = path.substring(3, 1);
        switch(res) {
            case "in":
                document.getElementById("index").className = "activePage";
                break;
            case "cv":
                document.getElementById("cv").className = "activePage";
                break;
            case "co":
                document.getElementById("contact").className = "activePage";
                break;
            case "ab":
                document.getElementById("about").className = "activePage";
                break;
            }  
    }