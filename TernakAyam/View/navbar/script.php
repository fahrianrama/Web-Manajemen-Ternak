<script>
    if(window.location.href.indexOf("data_pakan") > -1){
        document.getElementById("bidang_data").classList.add("active");
    }
    else if(window.location.href.indexOf("data_ayam") > -1){
        document.getElementById("bidang_data").classList.add("active");
    }
    else if(window.location.href.indexOf("stok_telur") > -1){
        document.getElementById("stok_telur").classList.add("active");
    }
    else if(window.location.href.indexOf("customers") > -1){
        document.getElementById("customers").classList.add("active");
    }
    else if(window.location.href.indexOf("obat_hama") > -1){
        document.getElementById("obat_hama").classList.add("active");
        document.getElementById("sidebargate").style.height = "975px";
    }
    else{
        document.getElementById("homenav").classList.add("active");
        document.getElementById("sidebargate").style.height = "760px";
    }
    function confirmlogout(){
        confirm("Apakah anda yakin ingin keluar?");
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>