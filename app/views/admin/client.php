
<?php include APPROOT . '/views/include/header.php'?>
<?php include APPROOT . '/views/include/sidebar.php'?>

<div id="formClient" class="fixed hidden inset-0 top-0 left-0 bg-black w-full h-full bg-opacity-30 backdrop-blur-sm  z-50 flex items-center justify-center">
    
    <form action="" id="form" class="w-[550px] bg-white p-5 rounded-lg relative">
        <div>
            <h2 class="text-center text-xl font-semibold text-secondary">Formulaire client</h2>
        </div>
        <p class="mt-2 text-md opacity-0 font-medium text-red-600 bg-red-50 py-2 px-3 rounded-lg dark:text-red-500" id="fieldErr"></p>
        <div class="py-3">
            <label for="error" class="block mb-2 text-md font-medium text-secondary">Nom</label>
            <input type="text" id="fieldNom"
                class=" bg-white border text-sm rounded-lg focus:ring-red-500  focus:border-red-500 block w-full p-2.5 "
                placeholder="Enter nom" name="nom">
        </div>
        <div class="py-3">
            <label for="error" class="block mb-2 text-md font-medium text-secondary">Prénom</label>
            <input type="text" id="fieldPrenom"
                class=" bg-white border text-sm rounded-lg focus:ring-red-500  focus:border-red-500 block w-full p-2.5 "
                placeholder="Enter prenom" name="prenom">
        </div>
        <div class="py-3">
            <label for="error" class="block mb-2 text-md font-medium text-secondary ">Adress</label>
            <input type="text" id="fieldAdress"
                class=" bg-white border text-sm rounded-lg focus:ring-red-500  focus:border-red-500 block w-full p-2.5 "
                placeholder="Enter nom" name="adress">
        </div>
        <div>          
            <label for="assureurs" class="block mb-2 text-sm font-medium text-gray-900 ">Select an option</label>
            <select id="assureurs" name="assureurId" class="border-gray-200 bg-white border text-gray-900 text-sm font-medium rounded-lg  block w-full p-2.5  focus:border-primary">
            <option selected value="">choise un assureur</option>

            </select>
        </div>
        <div class="flex gap-5 items-center justify-center">
            <button id="addClient" type="submit" name="addClient" class=" mt-5  items-center px-4 py-2 w-[200px]  text-center border
                    border-transparent text-sm leading-6 font-medium rounded-md text-secondary bg-primary focus:outline-none
                    transition duration-150 ease-in-out" style="display: block;">
                    Add Client
            </button>
            <button id="updateClient" class="mt-5 block items-center px-4 py-2 w-[200px] text-center border
                    border-transparent text-sm leading-6 font-medium rounded-md text-secondary bg-four focus:outline-none
                    transition duration-150 ease-in-out" style="display: none;">
                    Update Client
            </button>
        </div>

        <div class="absolute top-[10px] right-[20px] cursor-pointer" id="btnClose">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-secondary">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>
        </div>
    </form>
</div>

<main class="w-full h-[calc(100vh-64px)] bg-white p-10">
    <!-- ================== ALERT ADD +++++++++++++++++++++++++++ -->
    <div id="alert_add"  class="flex w-[95%] mx-auto items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 hidden" role="alert">
        <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
        </svg>
        <span class="sr-only">Info</span>
        <div id="" class="ms-3 text-sm font-medium alert">
                
        </div>
    </div>
    <!-- ================== ALERT DELETE +++++++++++++++++++++++++++ -->
    <div id="alert_delete"  class="flex w-[95%] mx-auto items-center p-4 mb-4 text-red-800 rounded-lg bg-red-50 hidden" role="alert">
        <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
        </svg>
        <span class="sr-only">Info</span>
        <div id="" class="ms-3 text-sm font-medium alert">
                
        </div>
    </div>
    <div class=" w-[95%] mx-auto my-5 flex items-center justify-between p-3 bg-secondary text-white rounded-lg">
        <h1 class="text-xl font-bold">CLIENTS</h1>
        <div class="flex items-center gap-5">
            <div class="relative">
                <div
                    class="absolute inset-y-0 left-0 rtl:inset-r-0 rtl:right-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-5 h-5  aria-hidden="true" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <input type="text" id="table-search"
                    class="block p-2 ps-10 text-sm text-white border-b border-white  w-80 bg-transparent placeholder:text-white"
                    placeholder="Search...">

            </div>
            <button id="btnAdd">
                <a href="#" class="inline-flex items-center px-6 py-2 border border-transparent text-sm
                    leading-6 font-medium rounded-md text-white bg-primary  hover:bg-gray-800 focus:outline-none
                     transition duration-150 ease-in-out">Add client</a>
            </button>
        </div>
    </div>
    <div class="relative w-[95%] mx-auto overflow-x-auto  sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-white">
            <thead class="text-sm text-secondary uppercase  bg-primary">
                <tr>
                    <th scope="col" class="px-6 py-2">
                        ID Client
                    </th>
                    <th scope="col" class="px-6 py-2">
                        Nom Client
                    </th>
                    <th scope="col" class="px-6 py-2">
                        Prénom Client
                    </th>
                    <th scope="col" class="px-6 py-2">
                        Adresse Client
                    </th>
                    <th scope="col" class="px-6 py-2">
                        ID Assureur
                    </th>
                    <th scope="col" class="px-6 py-2">
                        Nom Assureur  
                    </th>
                    <th scope="col" class="px-6 py-2">
                        Adresse Assureur
                    </th>
                    <th scope="col" class="px-6 py-2">
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody id="tableBody">

            </tbody>
        </table>
        <!-- ================ Pagination ================== -->
        <nav class="text-center my-5" aria-label="Page navigation example">
            <ul class="inline-flex  text-sm mx-auto" id="pagination">
                
            </ul>
        </nav>

    </div>





    </main>
</section>
  <!-- ================ JQUERY============ -->
<script>
    // Jquery Syntax
    const formClient = $("#formClient");
    const btnAdd = $("#btnAdd");
    const btnClose = $("#btnClose");
    const updateBtn = $("#updateClient");

$(document).ready(function() {
getData()
    // Pagination Traitement
    $(document).on('click' , '.page_item' , function() {
        var page = $(this).data('page');
        $.ajax({
            method : 'post',
            url : 'http://localhost/assurance/admin/fetchClient',
            data : {
                check : true,
                page : page
            },
            dataType : 'json',
            success : function(response) {
                updatePaginationUI(response);
            }

        })
    })

    // Number Pagination 
    $.ajax({
        method : 'post',
        url :  'http://localhost/assurance/admin/fetchAssureurs',
        dataType : 'json',
        success : function(response) {
            var num = response.pagination;
            for (let index = 1; index <= num; index++) {
                $('#pagination').append(`
                <li>
                <a href="#" class="flex items-center justify-center px-3 h-8 text-white border bg-secondary border-third rounded-l-md hover:bg-primary hover:text-white page_item" data-page='${index}'>${index}</a>
                </li>
            `)
            }


        }
    })
    // Fetch Assureur To Form Client 
    $.ajax({
        method : 'post',
        url :  'http://localhost/assurance/admin/fetchAssureurs',
        dataType : 'json',
        success : function(response) {
            $.each(response.dropAssureur,function (i,value) {
                $('#assureurs').append(`
                    <option value="${value.ID_Assureur}">${value.Nom}</option>
                `)
            })
            

        }
    })


    // fetch Data Assureurs

    // Search Assureur
    $("#table-search").on('keyup', function () {
            var searchField = $(this).val();
            $.ajax({
            method : 'post',
            url :  'http://localhost/assurance/admin/searchAssureur',
            data : {search : searchField},
            dataType : 'json',
            success : function(response) {
            $('#tableBody').empty();
            $.each(response, function(index,row){
                $('#tableBody').append(`
                <tr class="bg-white border-b  hover:bg-gray-50 ">
                    <td scope="row" class="px-6 py-2 font-medium text-gray-800 whitespace-nowrap assureurID">${row.ID_Assureur}</td>
                    <td class="px-6 py-2 px-6 py-2 font-medium text-gray-800 whitespace-nowrap nom">${row.Nom}</td>
                    <td class="px-6 py-2 px-6 py-2 font-medium text-gray-800 whitespace-nowrap adress">${row.Adresse} </td>
                    <td class="px-6 py-2 gap-1 flex items-center justify-center font-medium text-gray-800 whitespace-nowrap ">
                        <!-- ============ Delete Button =============  -->
                        <a href="#" class="font-medium text-rose-500  hover:underline delbtn">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                            </svg>
                        </a>
                        <!-- ============ Update Button =============  -->
                        <a href="#" class="font-medium text-green-400 hover:underline upBtn">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                        </svg>
                        </a>


                    </td>
                </tr>          
            `)
                
            })
        }
            })

    })

    // Delete Actions
    $('#tableBody').on('click' , '.delbtn', function() {
        var clientID = $(this).closest('tr').find('.clientID').text();
        $.ajax({
            method : 'post',
            url : 'http://localhost/assurance/admin/deleteClient',
            data : {
                check_delete : true,
                clientID : clientID
            },
            success : function(response){
                displayMessage(response,$('.alert'),$('#alert_delete'),5000);
                getData();
            }
        })
    })

    // Add NEw Assureur 

    $(document).on('submit' , '#form'  , function(e){

        e.preventDefault();
        let formulaire = new FormData(this);
        var fieldNom = $('#fieldNom').val();
        var fieldAdress = $('#fieldAdress').val();
        var fieldPrenom = $('#fieldPrenom').val();
        var fieldSelect = $('#assureurs').val();
        var fieldErr = $('#fieldErr');

        if(fieldNom === '' || fieldAdress === '' || fieldPrenom === '' || fieldSelect === '') {
            fieldErr.removeClass('opacity-0');
            fieldErr.text('Please Enter All Field');
        }else{
            fieldErr.addClass('opacity-0');
            fieldErr.text('');
        }

        if (fieldErr.text() === '') {
            // ADD action .....
            $.ajax({
            method : 'post',
            url : 'http://localhost/assurance/admin/addClient',
            processData: false,  
            contentType: false,
            cache: false,
            data : formulaire,
            success : function(response) {

                formClient.addClass('hidden');
                displayMessage(response,$('.alert'),$('#alert_add'),5000);
                getData(1);
                inputVoid();
            },
            error : function(error) {
                console.log(error);
            }

        }) 

    }


    }) 



  
    
    // edit id variable
    var edit_id; 
    $(document).on('click' , '.upBtn', function () {
        if (formClient.hasClass('hidden')) {
            formClient.removeClass('hidden');
            $('#addClient').hide();
            updateBtn.show();
        }

        edit_id = $(this).closest('tr').find('.assureurID').text().trim();
        var nom = $(this).closest('tr').find('.nom').text().trim();
        var adress = $(this).closest('tr').find('.adress').text().trim();
        $('#fieldNom').val(nom);
        $('#fieldAdress').val(adress);
        
    } )
    // Edit Action
    $(document).on('click' , '#updateAssureur' , function(e){
        e.preventDefault();
        var id = edit_id;
        var newNom = $('#fieldNom').val();
        var newAdress = $('#fieldAdress').val();

        if (newNom != '' && newAdress != '') {
            
            $.ajax({
                method : 'post',
                url : 'http://localhost/assurance/admin/updateAssureur',
                data : {
                    check_update : true,
                    edit_id : id,
                    nom : newNom,
                    adress : newAdress,
                },
                success : function(response) {
                    formClient.addClass('hidden');
                    displayMessage(response,$('.alert'),$('#alert_add'),5000);
                    inputVoid();
                    getData();
                }

            })



        }

    }) 









    // ========= Display Formulaire Client ========
    btnAdd.on('click',function() {
        if (formClient.hasClass('hidden')) {
            formClient.removeClass('hidden');
            $('#addClient').show();
            updateBtn.hide();
            inputVoid();
      
        }
    });

    btnClose.click(function() {
        if (!formClient.hasClass('hidden')) {
            formClient.addClass('hidden');
        }
    });
})
// Function Fetch Data
function getData() {
    $.ajax({
        method : 'post',
        url :  'http://localhost/assurance/admin/getAllClient',
        dataType : 'json',
        success : function(response) {
            console.log(response);
            $('#tableBody').empty();
            $.each(response, function(index,row){
                $('#tableBody').append(`
                <tr class="bg-white border-b  hover:bg-gray-50 ">
                    <td scope="row" class="px-6 py-2 font-medium text-gray-800 whitespace-nowrap clientID">${row.ID_Client}</td>
                    <td class="px-6 py-2 px-6 py-2 font-medium text-gray-800 whitespace-nowrap nom">${row.Client_Nom}</td>
                    <td class="px-6 py-2 px-6 py-2 font-medium text-gray-800 whitespace-nowrap adress">${row.Client_Prenom}</td>
                    <td class="px-6 py-2 px-6 py-2 font-medium text-gray-800 whitespace-nowrap adress">${row.Client_Adresse}</td>
                    <td class="px-6 py-2 px-6 py-2 font-medium text-gray-800 whitespace-nowrap adress">${row.ID_Assureur}</td>
                    <td class="px-6 py-2 px-6 py-2 font-medium text-gray-800 whitespace-nowrap adress">${row.Assureur_Nom}</td>
                    <td class="px-6 py-2 px-6 py-2 font-medium text-gray-800 whitespace-nowrap adress">${row.Assureur_Adresse}</td>
                    <td class="px-6 py-2 gap-1 flex items-center justify-center font-medium text-gray-800 whitespace-nowrap ">
                        <!-- ============ Delete Button =============  -->
                        <a href="#" class="font-medium text-rose-500  hover:underline delbtn">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                            </svg>
                        </a>
                        <!-- ============ Update Button =============  -->
                        <a href="#" class="font-medium text-green-400 hover:underline upBtn">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                        </svg>
                        </a>


                    </td>
                </tr>       
            `)
                
            })
        }
    })

}
function updatePaginationUI(response) {
    // Assuming you have a 'tableBody' element in your HTML
    var tableBody = $('#tableBody');

    // Clear existing content
    tableBody.empty();

    // Iterate through the assureurs and append rows to the table
    $.each(response.assureurs, function (index, row) {
        tableBody.append(`
            <tr class="bg-white border-b  hover:bg-gray-50 ">
                <td scope="row" class="px-6 py-2 font-medium text-gray-800 whitespace-nowrap assureurID">${row.ID_Assureur}</td>
                <td class="px-6 py-2 px-6 py-2 font-medium text-gray-800 whitespace-nowrap nom">${row.Nom}</td>
                <td class="px-6 py-2 px-6 py-2 font-medium text-gray-800 whitespace-nowrap adress">${row.Adresse} </td>
                <td class="px-6 py-2 gap-1 flex items-center justify-center font-medium text-gray-800 whitespace-nowrap ">
                    <!-- ============ Delete Button =============  -->
                    <a href="#" class="font-medium text-rose-500  hover:underline delbtn">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                        </svg>
                    </a>
                    <!-- ============ Update Button =============  -->
                    <a href="#" class="font-medium text-green-400 hover:underline upBtn">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                        </svg>
                    </a>
                </td>
            </tr>       
        `);
    });
}

// Display Message timeOut 
function displayMessage(message, element, parent , timeout) {
    parent.removeClass('hidden').fadeIn();
    element.text(message).fadeIn();
    setTimeout(function() {
        element.fadeOut();
        parent.fadeOut();
    }, timeout);

}
// vIDE INPUT Function 
function inputVoid(){
    $('#fieldNom').val('');
    $('#fieldAdress').val('');
    $('#fieldPrenom').val('');
    $('#assureurs').val('');
}

</script>

<?php include APPROOT . '/views/include/footer.php'?>


















