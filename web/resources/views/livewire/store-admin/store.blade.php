<div class="app-main flex-column flex-row-fluid mt-4 pt-4 ">

    <div class="app-container">
        <div class="uploadPageSec pb-6 d-flex flex-row me-3">
            <!--begin::Title-->
            <div class="col-md-3">
                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Stores
                </h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">

                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">Uploaded</li>
                    <!--end::Item-->
                </ul>
            </div>
            <!--end::Breadcrumb-->
            <div class="storeHeader col-md-9">
                <div class="headTextLeft">
                    <div class="form-group headSerchBox">
                        <span class="fa fa-search form-control-feedback"></span>
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                </div>
                   <div class="headTextRight">
                    <a href="javascript:void(0)" onclick="openUploadModal()" class="headTextRightBtn">Upload New
                        File</a>
                    <a href="javascript:void(0)" class="headFilterBtn" onclick="headFilterBtn()"><i
                            class="fa-solid fa-filter"></i>Filter</a>
                    <div class="filterBox">
                        <div class="backdrop" onclick="headFilterBtn()">
                        </div>
                        <div class="inner_filterBox">
                            <a href="javscript:void(0)" class="filterboxText">Status</a>
                            <a href="javscript:void(0)" class="filterboxText">Sales</a>
                            <a href="javscript:void(0)" class="filterboxText">Date</a>
                            <a href="javscript:void(0)" class="filterboxText">Created</a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- mobile header --}}
            <div class="mobStoreHeader col-md-9">
                <div class="form-group mobHeadSearchBox">
                    <span class="fa fa-search form-control-feedback"></span>
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <a href="javascript:void(0)" class="mobHeadUpBtn"><i class="fa-solid fa-circle-plus"></i> </a>
                <a href="javascript:void(0)" class="mobHeadFilterBtn"><i class="fa-solid fa-filter"></i></a>
                <div class="mobFilterBox">
                    <h5 class="filterboxText">Status</h5>
                    <h5 class="filterboxText">Sales</h5>
                    <h5 class="filterboxText">Date</h5>
                    <h5 class="filterboxText">Created</h5>

                </div>
            </div>
        </div>
        <div class="storeSec">
            <div class="uploadInnerSec">
                <div class="container">
                    

                    <div class="gridListBtn">
                        <button class="btn btn_gridListBtn" id="gridbtn" onclick="gridView()"><i
                                class="fa-solid fa-border-all"></i></button>
                        <button class="btn btn_gridListBtn" id="listbtn" onclick="listView()"><i
                                class="fa-solid fa-list-ul"></i></button>
                        <button class="gridDotIcon" onclick="openOptionDrawer()"><i
                                class="fa-solid fa-ellipsis-vertical"></i>
                        </button>
                        <div class="gridDotDetailsBox">
                            <div class="backdrop" onclick="openOptionDrawer()">

                            </div>
                            <div class="gridDotDetailsBox_inner">
                                <a href="javascript:void(0)" class="gridDotBoxText">Delete</a>
                                <a href="javascript:void(0)" class="gridDotBoxText">Move</a>
                                <a href="javascript:void(0)" class="gridDotBoxText">Download</a>
                            </div>
                        </div>
                    </div>

                    <div class="gridSec" id="gridId">
                        <div class="row g-5">
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="gridBox">
                                    <div class="inputCheck"><input type="checkbox" name="inputName" value="HTML">
                                    </div>
                                    <div class="dotIcon"><i class="fa-solid fa-ellipsis-vertical"></i>
                                    </div>
                                    <div class="dotDetailsBox">
                                        <h5 class="dotBoxText">Edit</h5>
                                        <h5 class="dotBoxText">View</h5>
                                        <h5 class="dotBoxText">Delete</h5>
                                        <h5 class="dotBoxText">Manage Products</h5>
                                    </div>
                                    <div class="gridBoxImg">
                                        <img src="assets/images/digiImage1.png" alt="image1" />
                                    </div>
                                    <div class="gridBoxText">
                                        <h4 class="prTitle">Logo Store</h4>
                                        <h6 class="prStatus">Status<span class="statusOp">Open</span></h6>
                                        <h6 class="prType">Total Sale</h6>
                                        <h5 class="activeText">Active</h5>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="gridBox">
                                    <div class="inputCheck"><input type="checkbox" name="inputName" value="HTML">
                                    </div>
                                    <div class="dotIcon"><i class="fa-solid fa-ellipsis-vertical"></i>
                                    </div>
                                    <div class="dotDetailsBox">
                                        <h5 class="dotBoxText">Edit</h5>
                                        <h5 class="dotBoxText">View</h5>
                                        <h5 class="dotBoxText">Delete</h5>
                                        <h5 class="dotBoxText">Manage Products</h5>
                                    </div>
                                    <div class="gridBoxImg">
                                        <img src="assets/images/digiImage1.png" alt="image1" />
                                    </div>
                                    <div class="gridBoxText">
                                        <h4 class="prTitle">Logo Store</h4>
                                        <h6 class="prStatus">Status<span class="statusCl">Close</span></h6>
                                        <h6 class="prType">Total Sale</h6>
                                        <h5 class="closeText">Close</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="gridBox">
                                    <div class="inputCheck"><input type="checkbox" name="inputName" value="HTML">
                                    </div>
                                    <div class="dotIcon"><i class="fa-solid fa-ellipsis-vertical"></i>
                                    </div>
                                    <div class="dotDetailsBox">
                                        <h5 class="dotBoxText">Edit</h5>
                                        <h5 class="dotBoxText">View</h5>
                                        <h5 class="dotBoxText">Delete</h5>
                                        <h5 class="dotBoxText">Manage Products</h5>
                                    </div>
                                    <div class="gridBoxImg">
                                        <img src="assets/images/digiImage1.png" alt="image1" />
                                    </div>
                                    <div class="gridBoxText">
                                        <h4 class="prTitle">Logo Store</h4>
                                        <h6 class="prStatus">Status<span class="statusCl">Close</span></h6>
                                        <h6 class="prType">Total Sale</h6>
                                        <h5 class="draftText">Draft</h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="listSec" id="listId">
                        <div class="storeInnerSec">
                            <table class="w-100 storeTable">
                                <tr class="tableHead text-center">
                                    <th>Logo</th>
                                    <th>Store Name</th>
                                    <th>Date</th>
                                    <th>Number of Products</th>
                                    <th>Total Sales</th>
                                    <th>Status</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                <tbody class="w-100">
                                    <tr class="storeRow text-center">
                                        <td class="storeCol">
                                            <a href="javascript:void(0)" class="storeImg"><img
                                                    src="assets/images/digiImage1.png" alt="image1" /></a>
                                        </td>
                                        <td>Logo Store</td>
                                        <td>Apr 2, 2023</td>
                                        <td>3</td>
                                        <td>5</td>
                                        <td><a href="javascript:void(0)" class="listError">Error</a></td>
                                        <td>
                                            <a href="javascript:void(0)" class="storeEditIcon">
                                                <i class="fa-solid fa-pen"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0)" class="storeDeleteIcon">
                                                <i class="fa-solid fa-trash-can"></i>
                                            </a>
                                        </td>
                                    </tr>

                                    <tr class="storeRow text-center">
                                        <td class="storeCol">
                                            <a href="javascript:void(0)" class="storeImg"><img
                                                    src="assets/images/digiImage1.png" alt="image1" /></a>
                                        </td>
                                        <td>Logo Store</td>
                                        <td>Apr 2, 2023</td>
                                        <td>3</td>
                                        <td>5</td>
                                        <td><a href="javascript:void(0)" class="listPending">Pending</a></td>
                                        <td>
                                            <a href="javascript:void(0)" class="storeEditIcon">
                                                <i class="fa-solid fa-pen"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0)" class="storeDeleteIcon">
                                                <i class="fa-solid fa-trash-can"></i>
                                            </a>
                                        </td>
                                    </tr>

                                    <tr class="storeRow text-center">
                                        <td class="storeCol">
                                            <a href="javascript:void(0)" class="storeImg"><img
                                                    src="assets/images/digiImage1.png" alt="image1" /></a>
                                        </td>
                                        <td>Logo Store</td>
                                        <td>Apr 2, 2023</td>
                                        <td>3</td>
                                        <td>5</td>

                                        <td><a href="javascript:void(0)" class="listPending">Pending</a></td>
                                        <td>
                                            <a href="javascript:void(0)" class="storeEditIcon">
                                                <i class="fa-solid fa-pen"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0)" class="storeDeleteIcon">
                                                <i class="fa-solid fa-trash-can"></i>
                                            </a>
                                        </td>
                                    </tr>

                                    <tr class="storeRow text-center">
                                        <td class="storeCol">
                                            <a href="javascript:void(0)" class="storeImg"><img
                                                    src="assets/images/digiImage1.png" alt="image1" /></a>
                                        </td>
                                        <td>Logo Store</td>
                                        <td>Apr 2, 2023</td>
                                        <td>3</td>
                                        <td>5</td>

                                        <td><a href="javascript:void(0)" class="listProcess">Process</a></td>
                                        <td>
                                            <a href="javascript:void(0)" class="storeEditIcon">
                                                <i class="fa-solid fa-pen"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0)" class="storeDeleteIcon">
                                                <i class="fa-solid fa-trash-can"></i>
                                            </a>
                                        </td>
                                    </tr>

                                    <tr class="storeRow text-center">
                                        <td class="storeCol">
                                            <a href="javascript:void(0)" class="storeImg"><img
                                                    src="assets/images/digiImage1.png" alt="image1" /></a>
                                        </td>
                                        <td>Logo Store</td>
                                        <td>Apr 2, 2023</td>
                                        <td>3</td>
                                        <td>5</td>

                                        <td><a href="javascript:void(0)" class="listError">Error</a></td>
                                        <td>
                                            <a href="javascript:void(0)" class="storeEditIcon">
                                                <i class="fa-solid fa-pen"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0)" class="storeDeleteIcon">
                                                <i class="fa-solid fa-trash-can"></i>
                                            </a>
                                        </td>
                                    </tr>

                                    <tr class="storeRow text-center">
                                        <td class="storeCol">
                                            <a href="javascript:void(0)" class="storeImg"><img
                                                    src="assets/images/digiImage1.png" alt="image1" /></a>
                                        </td>
                                        <td>Logo Store</td>
                                        <td>Apr 2, 2023</td>
                                        <td>3</td>
                                        <td>5</td>

                                        <td><a href="javascript:void(0)" class="listError">Error</a></td>
                                        <td>
                                            <a href="javascript:void(0)" class="storeEditIcon">
                                                <i class="fa-solid fa-pen"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0)" class="storeDeleteIcon">
                                                <i class="fa-solid fa-trash-can"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>


                    @include('modal.uploadFileModal')
                </div>
            </div>
        </div>
    </div>





    <div class="paginationSec pt-6">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
</div>

</div>
