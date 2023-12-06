<div class="app-main flex-column flex-row-fluid mt-4 pt-4 ">
    <div class="app-container">
        <div class="uploadPageSec pb-6 d-flex flex-row me-3">
            <!--begin::Title-->
            <div class="col-md-3">
                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Uploaded
                    Files
                </h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">

                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">Logo Library</li>

                    <li class="breadcrumb-item text-muted">></li>

                    <li class="breadcrumb-item text-muted"><a href="{{ route('uploaded-files') }}">Uploaded
                            Files</a></li>
                    <!--end::Item-->
                </ul>
            </div>
            <!--end::Breadcrumb-->
            <div class="uploadHeader col-md-9">
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
                            <a href="javscript:void(0)" class="filterboxText">Date</a>
                            <a href="javscript:void(0)" class="filterboxText">Type</a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- mobile header --}}
            <div class="mobUploadHeader col-md-9">
                <div class="form-group mobHeadSearchBox">
                    <span class="fa fa-search form-control-feedback"></span>
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <a href="javascript:void(0)" class="mobHeadUpBtn"><i class="fa-solid fa-cloud-arrow-up"></i></a>
                <a href="javascript:void(0)" class="mobHeadFilterBtn"><i class="fa-solid fa-filter"></i></a>
                <div class="mobFilterBox">
                    <h5 class="filterboxText">Date</h5>
                    <h5 class="filterboxText">Type</h5>
                </div>
            </div>
        </div>
        <div class="uploadSec">
            {{-- <div class="container">
                <div class="uploadHeader">
                    <div class="headTextLeft">
                        <div class="form-group headSerchBox">
                            <span class="fa fa-search form-control-feedback"></span>
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                    </div>
                    <div class="headTextRight">
                        <a href="javascript:void(0)" class="headTextRightBtn">Upload New File</a>
                        <a href="javascript:void(0)" class="headFilterBtn"><i class="fa-solid fa-filter"></i>Filter</a>
                        <div class="filterBox">
                            <h5 class="filterboxText">Date</h5>
                            <h5 class="filterboxText">Type</h5>
                        </div>
                    </div>
                </div>
            </div> --}}
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
                                    <button class="dotIcon" data-target="#detailsBox1" data-dot-open="0"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="fa-solid fa-ellipsis-vertical"></i>
                                    </button>
                                    <div class="switchBtn"><input type="checkbox" id="switch" /><label
                                            for="switch"></label>
                                    </div>
                                    <div class="dotDetailsBox dropdown-menu" id="detailsBox1">
                                        <h5 class="dotBoxText">Download</h5>
                                        <h5 class="dotBoxText">Delete</h5>
                                        <h5 class="dotBoxText">Rename</h5>
                                        <h5 class="dotBoxText">View details</h5>
                                    </div>
                                    <div class="gridBoxImg">
                                        <img src="assets/images/digiImage1.png" alt="image1" />
                                    </div>
                                    <div class="gridBoxText" onclick="openDetailBox()">
                                        <h4 class="prTitle">Grand Court Cloudfoam Comfort Shoes</h4>
                                        <h6 class="prDate">Apr 2, 2023</h6>
                                        <h5 class="prSize">2.40"W x 2.38"H</h5>
                                        <h6 class="prType">Jpg</h6>
                                        <h5 class="errorIcon">Error</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="gridBox">
                                    <div class="inputCheck"><input type="checkbox" name="inputName" value="HTML">
                                    </div>
                                    <a href="javscript:void(0)" data-dot-open="0" onclick="openLogoOption()"
                                        class="dotIcon"><i class="fa-solid fa-ellipsis-vertical"></i>
                                    </a>

                                    <div class="dotDetailsBox">
                                        <h5 class="dotBoxText">Download</h5>
                                        <h5 class="dotBoxText">Delete</h5>
                                        <h5 class="dotBoxText">Rename</h5>
                                        <h5 class="dotBoxText">View details</h5>
                                    </div>
                                    <div class="gridBoxImg">
                                        <img src="assets/images/digiImage1.png" alt="image1" />
                                    </div>
                                    <div class="gridBoxText">
                                        <h4 class="prTitle">Grand Court Cloudfoam Comfort Shoes</h4>
                                        <h6 class="prDate">Apr 2, 2023</h6>
                                        <h5 class="prSize">2.40"W x 2.38"H</h5>
                                        <h6 class="prType">Jpg</h6>
                                        <h5 class="errorIcon">Error</h5>
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
                                        <h5 class="dotBoxText">Download</h5>
                                        <h5 class="dotBoxText">Delete</h5>
                                        <h5 class="dotBoxText">Rename</h5>
                                        <h5 class="dotBoxText">View details</h5>
                                    </div>
                                    <div class="gridBoxImg">
                                        <img src="assets/images/digiImage1.png" alt="image1" />
                                    </div>
                                    <div class="gridBoxText">
                                        <h4 class="prTitle">Grand Court Cloudfoam Comfort Shoes</h4>
                                        <h6 class="prDate">Apr 2, 2023</h6>
                                        <h5 class="prSize">2.40"W x 2.38"H</h5>
                                        <h6 class="prType">Jpg</h6>
                                        <h5 class="errorIcon">Error</h5>
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
                                        <h5 class="dotBoxText">Download</h5>
                                        <h5 class="dotBoxText">Delete</h5>
                                        <h5 class="dotBoxText">Rename</h5>
                                        <h5 class="dotBoxText">View details</h5>
                                    </div>
                                    <div class="gridBoxImg">
                                        <img src="assets/images/digiImage1.png" alt="image1" />
                                    </div>
                                    <div class="gridBoxText">
                                        <h4 class="prTitle">Grand Court Cloudfoam Comfort Shoes</h4>
                                        <h6 class="prDate">Apr 2, 2023</h6>
                                        <h5 class="prSize">2.40"W x 2.38"H</h5>
                                        <h6 class="prType">Jpg</h6>
                                        <h5 class="errorIcon">Error</h5>
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
                                        <h5 class="dotBoxText">Download</h5>
                                        <h5 class="dotBoxText">Delete</h5>
                                        <h5 class="dotBoxText">Rename</h5>
                                        <h5 class="dotBoxText">View details</h5>
                                    </div>
                                    <div class="gridBoxImg">
                                        <img src="assets/images/digiImage1.png" alt="image1" />
                                    </div>
                                    <div class="gridBoxText">
                                        <h4 class="prTitle">Grand Court Cloudfoam Comfort Shoes</h4>
                                        <h6 class="prDate">Apr 2, 2023</h6>
                                        <h5 class="prSize">2.40"W x 2.38"H</h5>
                                        <h6 class="prType">Jpg</h6>
                                        <h5 class="errorIcon">Error</h5>
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
                                        <h5 class="dotBoxText">Download</h5>
                                        <h5 class="dotBoxText">Delete</h5>
                                        <h5 class="dotBoxText">Rename</h5>
                                        <h5 class="dotBoxText">View details</h5>
                                    </div>
                                    <div class="gridBoxImg">
                                        <img src="assets/images/digiImage1.png" alt="image1" />
                                    </div>
                                    <div class="gridBoxText">
                                        <h4 class="prTitle">Grand Court Cloudfoam Comfort Shoes</h4>
                                        <h6 class="prDate">Apr 2, 2023</h6>
                                        <h5 class="prSize">2.40"W x 2.38"H</h5>
                                        <h6 class="prType">Jpg</h6>
                                        <h5 class="errorIcon">Error</h5>
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
                                        <h5 class="dotBoxText">Download</h5>
                                        <h5 class="dotBoxText">Delete</h5>
                                        <h5 class="dotBoxText">Rename</h5>
                                        <h5 class="dotBoxText">View details</h5>
                                    </div>
                                    <div class="gridBoxImg">
                                        <img src="assets/images/digiImage1.png" alt="image1" />
                                    </div>
                                    <div class="gridBoxText">
                                        <h4 class="prTitle">Grand Court Cloudfoam Comfort Shoes</h4>
                                        <h6 class="prDate">Apr 2, 2023</h6>
                                        <h5 class="prSize">2.40"W x 2.38"H</h5>
                                        <h6 class="prType">Jpg</h6>
                                        <h5 class="errorIcon">Error</h5>
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
                                        <h5 class="dotBoxText">Download</h5>
                                        <h5 class="dotBoxText">Delete</h5>
                                        <h5 class="dotBoxText">Rename</h5>
                                        <h5 class="dotBoxText">View details</h5>
                                    </div>
                                    <div class="gridBoxImg">
                                        <img src="assets/images/digiImage1.png" alt="image1" />
                                    </div>
                                    <div class="gridBoxText">
                                        <h4 class="prTitle">Grand Court Cloudfoam Comfort Shoes</h4>
                                        <h6 class="prDate">Apr 2, 2023</h6>
                                        <h5 class="prSize">2.40"W x 2.38"H</h5>
                                        <h6 class="prType">Jpg</h6>
                                        <h5 class="errorIcon">Error</h5>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="listSec mt-3" id="listId" style="display: none">
                        <div class="uploadListInnerSec">
                            <table class="w-100 uploadListTable">
                                <tr class="tableHead text-center">
                                    <th>Logo</th>
                                    <th>Name</th>
                                    <th>Date</th>
                                    <th>Type</th>
                                    <th>Size</th>
                                    <th>Status</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                <tbody class="w-100">
                                    <tr class="uploadListRow text-center">
                                        <td class="uploadListCol">
                                            <a href="javascript:void(0)" class="uploadListImg"
                                                onclick="openDetailBox()"><img src="assets/images/digiImage1.png"
                                                    alt="image1" /></a>
                                        </td>
                                        <td>Grand Court Cloudfoam Comfort Shoes</td>
                                        <td>Apr 2, 2023</td>
                                        <td>Jpg</td>
                                        <td>2.40"W x 2.38"H</td>
                                        <td><a href="javascript:void(0)" class="listError">Error</a></td>
                                        <td>
                                            <a href="javascript:void(0)" class="uploadListEditIcon"
                                                data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit">
                                                <i class="fa-solid fa-pen"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0)" class="uploadListDeleteIcon"
                                                data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete">
                                                <i class="fa-solid fa-trash-can"></i>
                                            </a>
                                        </td>
                                    </tr>

                                    <tr class="uploadListRow text-center">
                                        <td class="uploadListCol">
                                            <a href="javascript:void(0)" class="uploadListImg"><img
                                                    src="assets/images/digiImage1.png" alt="image1" /></a>
                                        </td>
                                        <td>Grand Court Cloudfoam Comfort Shoes</td>
                                        <td>Apr 2, 2023</td>
                                        <td>Jpg</td>
                                        <td>2.40"W x 2.38"H</td>
                                        <td><a href="javascript:void(0)" class="listError">Error</a></td>
                                        <td>
                                            <a href="javascript:void(0)" class="uploadListEditIcon">
                                                <i class="fa-solid fa-pen"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0)" class="uploadListDeleteIcon">
                                                <i class="fa-solid fa-trash-can"></i>
                                            </a>
                                        </td>
                                    </tr>

                                    <tr class="uploadListRow text-center">
                                        <td class="uploadListCol">
                                            <a href="javascript:void(0)" class="uploadListImg"><img
                                                    src="assets/images/digiImage1.png" alt="image1" /></a>
                                        </td>
                                        <td>Grand Court Cloudfoam Comfort Shoes</td>
                                        <td>Apr 2, 2023</td>
                                        <td>Jpg</td>
                                        <td>2.40"W x 2.38"H</td>
                                        <td><a href="javascript:void(0)" class="listPending">Pending</a></td>
                                        <td>
                                            <a href="javascript:void(0)" class="uploadListEditIcon">
                                                <i class="fa-solid fa-pen"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0)" class="uploadListDeleteIcon">
                                                <i class="fa-solid fa-trash-can"></i>
                                            </a>
                                        </td>
                                    </tr>

                                    <tr class="uploadListRow text-center">
                                        <td class="uploadListCol">
                                            <a href="javascript:void(0)" class="uploadListImg"><img
                                                    src="assets/images/digiImage1.png" alt="image1" /></a>
                                        </td>
                                        <td>Grand Court Cloudfoam Comfort Shoes</td>
                                        <td>Apr 2, 2023</td>
                                        <td>Jpg</td>
                                        <td>2.40"W x 2.38"H</td>
                                        <td><a href="javascript:void(0)" class="listProcess">Process</a></td>
                                        <td>
                                            <a href="javascript:void(0)" class="uploadListEditIcon">
                                                <i class="fa-solid fa-pen"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0)" class="uploadListDeleteIcon">
                                                <i class="fa-solid fa-trash-can"></i>
                                            </a>
                                        </td>
                                    </tr>

                                    <tr class="uploadListRow text-center">
                                        <td class="uploadListCol">
                                            <a href="javascript:void(0)" class="uploadListImg"><img
                                                    src="assets/images/digiImage1.png" alt="image1" /></a>
                                        </td>
                                        <td>Grand Court Cloudfoam Comfort Shoes</td>
                                        <td>Apr 2, 2023</td>
                                        <td>Jpg</td>
                                        <td>2.40"W x 2.38"H</td>
                                        <td><a href="javascript:void(0)" class="listError">Error</a></td>
                                        <td>
                                            <a href="javascript:void(0)" class="uploadListEditIcon">
                                                <i class="fa-solid fa-pen"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0)" class="uploadListDeleteIcon">
                                                <i class="fa-solid fa-trash-can"></i>
                                            </a>
                                        </td>
                                    </tr>

                                    <tr class="uploadListRow text-center">
                                        <td class="uploadListCol">
                                            <a href="javascript:void(0)" class="uploadListImg"><img
                                                    src="assets/images/digiImage1.png" alt="image1" /></a>
                                        </td>
                                        <td>Grand Court Cloudfoam Comfort Shoes</td>
                                        <td>Apr 2, 2023</td>
                                        <td>Jpg</td>
                                        <td>2.40"W x 2.38"H</td>
                                        <td><a href="javascript:void(0)" class="listError">Error</a></td>
                                        <td>
                                            <a href="javascript:void(0)" class="uploadListEditIcon">
                                                <i class="fa-solid fa-pen"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0)" class="uploadListDeleteIcon">
                                                <i class="fa-solid fa-trash-can"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    {{-- <div id="uploadFileModal" style="display: none"> --}}
                    @include('modal.uploadFileModal')
                    {{-- </div> --}}
                </div>
            </div>
        </div>
    </div>
    {{-- <div id="productModal" style="display: none"> --}}
    @include('modal.productModal')
    {{-- </div> --}}




    <div class="paginationSec py-6">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="javscript:void(0)">1</a></li>
                <li class="page-item"><a class="page-link" href="javscript:void(0)">2</a></li>
                <li class="page-item"><a class="page-link" href="javscript:void(0)">3</a></li>
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
