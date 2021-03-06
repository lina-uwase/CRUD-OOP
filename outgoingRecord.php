
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css"/> 
<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>

    <style>
        *{
           margin: 0;
           box-sizing: border-box;
      }
        .container1{
            display: flex;
            align-items: center;
            justify-content: center;
        
        }
        #records{
            display: flex;
            justify-content: center;
            align-items: center; 
        }
            table,th,td{
            padding:5px 8px;
            color: black;
            font-size: 20px;
        }
       tr:nth-child(2){
        margin-top: 20px;
       }
        /* table th{
            border-radius: 5px;
            background-color: white;
        } */
        tr:nth-child(even){
            background-color: #F5F5F5;
            border-radius: 50%;
        }
        table{
            border-collapse:collapse;
            margin-left: auto;
            margin-right: auto;
            width: 70rem;
            margin-top: 10px;
            margin-bottom: 2rem;
        }
        a{
            text-decoration: none;
        }
        #delete{
            border: 1px solid  #E9838C;
            background-color: #E9838C ;
            color: white;
        }
        #update{
            border: 1px solid #5356AC;
            background-color:#5356AC;
            color: white;
        }
body{
    overflow-x: hidden;
    background-color: #EDEDF5;

}
.container{
display: flex !important;
position: absolute !important;
left: 0 !important;
}
.heading{
    height: 8rem;
    display: flex;
    justify-content: center;
    align-items: center;
}
.header{
    border-bottom: 1px solid rgba(0, 0, 0, 0.105);
    height: 5rem;
    width: 81rem;
    color: rgba(0, 0, 0, 0.534);
    display: flex;
    justify-content: center;
    font-size: larger !important;
    align-items: center;
}
.tables{
    margin-left: 20px;
    margin-top: 50px;
    gap: 100px;
    font-size: 20px;
    display: flex;
    flex-direction: column;
}
a{
    text-decoration: none;
    color: rgba(0, 0, 0, 0.534);
}
a:hover{
    transition: 0.4s;
    color: black;
    text-decoration: none;
}

.title{
    color: rgba(0, 0, 0, 0.288);
    font-family: sans-serif;
    font-size: 15px !important;

}
.profile-name{
    display: flex;
    float: left;
    color: rgba(0, 0, 0, 0.288);
    font-size: 10px;
   margin-left: 60rem;
}
.profile-photo{
    background-image: url('01.jpg');
    background-size: 40px;
    width: 2.5rem;
    height: 2.5rem;
    border-radius: 50%;
    margin-left: 10px;
}
.menu{
    background-color: #F5F5F5;
    width: 15rem;
    height: 47.5rem;
    position: relative !important;
    top: 1; 
    left: 0;
}
.main{
    display: flex;
    flex-direction: column;
    
}
.main-content{
    background: #EAE1E2;
    width: 70rem;
    height: 15rem;
    margin-top: 5rem;
    margin-left: 3rem;
    border-radius: 15px;
    display: flex;
    flex-direction: column;
    gap: 50px;
}
.content-one{
    display: flex;
    gap: 60px;
    margin-top: 25px;
    
}
button{
    cursor: pointer;
}
.names{
    background-color: white;
    display: flex;
}
.data{
   margin-left: 30px;
   color: white;
   font-family: 'Times New Roman', Times, serif;
    height: 20px;
    
}
.overview{
    width: 10rem;
    height: 7rem;
    margin-left: 30px;
    

}
.overview-button{
    background-color:#5356AC;
    margin-top: 50px;
    width: 12rem;
    height: 4rem;
    border: none;
    color: white;

}
.investors{
    width: 10rem;
    height: 7rem;
   

}
.investors-button{
    background-color: #B8BBE0;
    margin-top: 50px;
    width: 12rem;
    height: 4rem;
    border: none;
    color: white;

}
.stores{
    width: 10rem;
    height: 7rem;
}
.stores-button{
    background-color: #E9838C;
    margin-top: 50px;
    width: 12rem;
    height: 4rem;
    border: none;
    color: white;
}
.expired{
    width: 10rem;
    height: 7rem; 
}
.expired-button{
    background-color: #698AEE;
    margin-top: 50px;
    width: 12rem;
    height: 4rem;
    border: none;
    color: white;
}
.illustration{
    background-image: url("6269561.jpg");
    background-size: 15rem;
    width: 15rem;
    height: 8rem;
    padding-top: 5rem;    
}
.chart{
 background-size: 900px;
 height: 21.2rem;
 margin-left: 50px;
 margin-top: 50px;
 width: 70rem;
}

    </style>
</head>
<body>
    <div class="container">
        <div class="side-div">
            <div class="menu">
                <div class="heading">
                    <h1><svg width="319" height="233" viewBox="0 0 319 233" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M167.21 144.743H89.79C89.3555 144.743 89 145.256 89 145.883V153.86C89 154.487 89.3555 155 89.79 155H167.21C167.645 155 168 154.487 168 153.86V145.883C168 145.256 167.645 144.743 167.21 144.743ZM94.3029 126.908L98.2232 132.535C98.5294 132.977 99.033 132.977 99.3391 132.535L122.516 99.2151L132.154 113.076C132.748 113.925 133.55 114.401 134.385 114.401C135.221 114.401 136.023 113.925 136.617 113.076L162.707 75.582C163.013 75.1404 163.013 74.4138 162.707 73.9722L158.787 68.3311C158.638 68.119 158.438 68 158.229 68C158.02 68 157.819 68.119 157.671 68.3311L134.395 101.808L124.748 87.947C124.154 87.0983 123.352 86.6221 122.516 86.6221C121.68 86.6221 120.878 87.0983 120.284 87.947L94.3029 125.298C94.229 125.404 94.1704 125.529 94.1303 125.667C94.0903 125.805 94.0697 125.953 94.0697 126.103C94.0697 126.253 94.0903 126.401 94.1303 126.539C94.1704 126.678 94.229 126.803 94.3029 126.908V126.908Z"
                                fill="#5254A3" />
                            <path
                                d="M150.134 122.668C150.048 121.73 149.669 121.001 148.996 120.482C148.331 119.953 147.381 119.689 146.145 119.689C145.327 119.689 144.645 119.795 144.099 120.009C143.554 120.222 143.145 120.516 142.872 120.891C142.599 121.257 142.459 121.679 142.45 122.156C142.433 122.548 142.51 122.893 142.68 123.192C142.859 123.49 143.115 123.754 143.447 123.984C143.788 124.206 144.197 124.402 144.675 124.572C145.152 124.743 145.689 124.892 146.286 125.02L148.536 125.531C149.831 125.812 150.973 126.188 151.962 126.656C152.959 127.125 153.794 127.683 154.467 128.331C155.149 128.979 155.665 129.724 156.014 130.568C156.364 131.412 156.543 132.358 156.551 133.406C156.543 135.06 156.125 136.479 155.298 137.663C154.472 138.848 153.283 139.756 151.732 140.386C150.189 141.017 148.327 141.332 146.145 141.332C143.955 141.332 142.045 141.004 140.418 140.348C138.79 139.692 137.524 138.695 136.621 137.357C135.717 136.018 135.253 134.327 135.227 132.281H141.287C141.338 133.125 141.564 133.828 141.964 134.391C142.365 134.953 142.915 135.379 143.614 135.669C144.321 135.959 145.139 136.104 146.068 136.104C146.92 136.104 147.645 135.989 148.241 135.759C148.847 135.528 149.311 135.209 149.635 134.8C149.959 134.391 150.125 133.922 150.134 133.393C150.125 132.899 149.972 132.477 149.673 132.128C149.375 131.77 148.915 131.463 148.293 131.207C147.679 130.943 146.895 130.7 145.94 130.479L143.205 129.839C140.938 129.32 139.152 128.48 137.848 127.321C136.544 126.153 135.896 124.577 135.905 122.591C135.896 120.972 136.331 119.553 137.209 118.334C138.087 117.115 139.301 116.165 140.852 115.483C142.403 114.801 144.172 114.46 146.158 114.46C148.186 114.46 149.946 114.805 151.438 115.496C152.938 116.178 154.101 117.136 154.928 118.372C155.754 119.608 156.176 121.04 156.193 122.668H150.134ZM170.831 121.364V125.966H158.443V121.364H170.831ZM161.038 116.659H167.29V134.825C167.29 135.209 167.349 135.52 167.469 135.759C167.597 135.989 167.78 136.155 168.018 136.257C168.257 136.351 168.543 136.398 168.875 136.398C169.114 136.398 169.365 136.376 169.629 136.334C169.902 136.283 170.107 136.24 170.243 136.206L171.189 140.719C170.891 140.804 170.469 140.911 169.923 141.038C169.386 141.166 168.743 141.247 167.993 141.281C166.527 141.349 165.27 141.179 164.222 140.77C163.182 140.352 162.385 139.705 161.831 138.827C161.286 137.949 161.021 136.845 161.038 135.516V116.659ZM182.976 141.371C180.913 141.371 179.141 140.949 177.658 140.105C176.183 139.253 175.045 138.068 174.244 136.551C173.452 135.026 173.055 133.257 173.055 131.246C173.055 129.226 173.452 127.457 174.244 125.94C175.045 124.415 176.183 123.23 177.658 122.386C179.141 121.534 180.913 121.108 182.976 121.108C185.038 121.108 186.807 121.534 188.281 122.386C189.764 123.23 190.902 124.415 191.695 125.94C192.496 127.457 192.896 129.226 192.896 131.246C192.896 133.257 192.496 135.026 191.695 136.551C190.902 138.068 189.764 139.253 188.281 140.105C186.807 140.949 185.038 141.371 182.976 141.371ZM183.014 136.653C183.764 136.653 184.399 136.423 184.919 135.963C185.439 135.503 185.835 134.864 186.108 134.045C186.389 133.227 186.53 132.281 186.53 131.207C186.53 130.116 186.389 129.162 186.108 128.344C185.835 127.526 185.439 126.886 184.919 126.426C184.399 125.966 183.764 125.736 183.014 125.736C182.239 125.736 181.582 125.966 181.045 126.426C180.517 126.886 180.112 127.526 179.831 128.344C179.558 129.162 179.422 130.116 179.422 131.207C179.422 132.281 179.558 133.227 179.831 134.045C180.112 134.864 180.517 135.503 181.045 135.963C181.582 136.423 182.239 136.653 183.014 136.653ZM205.265 141.371C203.194 141.371 201.417 140.945 199.934 140.092C198.46 139.24 197.326 138.055 196.533 136.538C195.741 135.013 195.344 133.249 195.344 131.246C195.344 129.234 195.741 127.47 196.533 125.953C197.335 124.428 198.472 123.239 199.947 122.386C201.43 121.534 203.198 121.108 205.252 121.108C207.067 121.108 208.648 121.436 209.995 122.092C211.35 122.749 212.407 123.678 213.165 124.879C213.933 126.072 214.337 127.474 214.38 129.085H208.538C208.418 128.08 208.077 127.291 207.515 126.72C206.961 126.149 206.237 125.864 205.342 125.864C204.617 125.864 203.982 126.068 203.437 126.477C202.891 126.878 202.465 127.474 202.158 128.267C201.86 129.051 201.711 130.023 201.711 131.182C201.711 132.341 201.86 133.321 202.158 134.122C202.465 134.915 202.891 135.516 203.437 135.925C203.982 136.325 204.617 136.526 205.342 136.526C205.921 136.526 206.433 136.402 206.876 136.155C207.327 135.908 207.698 135.545 207.988 135.068C208.278 134.582 208.461 133.994 208.538 133.304H214.38C214.32 134.923 213.915 136.338 213.165 137.548C212.424 138.759 211.38 139.7 210.033 140.374C208.695 141.038 207.106 141.371 205.265 141.371ZM223.217 135.848L223.243 128.395H224.112L229.635 121.364H236.717L228.51 131.438H226.86L223.217 135.848ZM217.579 141V114.818H223.831V141H217.579ZM229.775 141L224.636 132.844L228.752 128.408L236.998 141H229.775Z"
                                fill="black" />
                        </svg>
                    </h1>
                </div>
                <div class="tables">
                    <div class="products">
                        <i class="fa-brands fa-product-hunt"></i> <a href="productsRecord1.php">Prodcuts</a>
                    </div>
                    <div class="outgoing">
                        <i class="fa-brands fa-product-hunt"></i> <a href="#">outgoing</a>
                    </div>
                    <div class="users">
                        <i class="fa-solid fa-users"></i> <a href="users">users</a>
                    </div>
                    <div class="stock_inv">
                        <i class="fa-solid fa-arrow-trend-up"></i> <a href="#">stock_inventory</a>
                    </div>
                </div>
            </div>

        </div>
        <div class="main">
            <div class="header">
                <div class="title">
                <h1> Products</h1>
                </div>
                <div class="user-profile">
                    <div class="profile-name">
                        <h1>Light</h1>
                    </div>
                </div>
                <div class="profile-photo"></div>
            </div>
            <div class="main-content">
                <div class="data">
                    <h1>Data</h1>
                </div>
                <div class="content-one">
                    <div class="overview">
                        <div class="button">
                            <button class="overview-button">overview</button>
                        </div>
                    </div>
                    <div class="investors">
                        <button class="investors-button">investors</button>
                    </div>
                    <div class="stores">
                        <button class="stores-button">stores</button>
                    </div>
                    <div class="expired">
                        <button class="expired-button">Expired</button>
                    </div>
                    <div class="illustration">
                    </div>
                </div>
            </div>
            <div class="chart"> 
            <div class="container-1">
        <table cellspacing="0" >
            <thead>
            <tr>
                <th>outgoing Id</th>
                <th>Product Id</th>
                <th>Quantity</th>
                <th>Added date</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                <?php
                include 'outgoingConn.php';
                $model=new model();
                $rows = $model->fetch();
                $i = 1;
                if(!empty($rows)){
                    foreach($rows as $row){

 
                ?>
                <tr>
                <td><?php echo $i++;?></td>
                <td><?php echo $row['productId']; ?></td>
                <td><?php echo $row['quantity']; ?></td>
                <td><?php echo $row['added_date']; ?></td>
               <td> 
               <?php echo "<a id=delete href=outgoingDelete.php?outgoingId=".$row['outgoingId'].">Delete</a>" ?>
                <?php echo "<a id=update href=outgoingUpdate.php?outgoingId=".$row['outgoingId'].">Update</a>" ?>
               </td>
                </tr>
                <?php
                     }
                    }
                ?>
            </tbody>
        </table>
        
    </div>
    <script type='text/javascript'>
         $(document).ready(function(){
             $('table').DataTable();
     
         });
         </script>
</body>

</html>




