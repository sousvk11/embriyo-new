<div class="app-main flex-column flex-row-fluid mt-4 pt-4 ">

    <div class="app-container">
        <div class="digiPageSec pb-6 d-flex flex-row me-3">
            <!--begin::Title-->
            <div class="col-md-3">
                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Digitized
                    Logos
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
            <div class="digiHeader col-md-9">
                <div class="headTextLeft">
                    <div class="form-group headSerchBox">
                        <span class="fa fa-search form-control-feedback"></span>
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                </div>
                <div class="headTextRight">

                    <a href="javascript:void(0)" class="headFilterBtn" onclick="headFilterBtn()"><i
                            class="fa-solid fa-filter"></i>Filter</a>
                    <div class="filterBox dropdown-menu">
                        <div class="backdrop" onclick="headFilterBtn()">
                        </div>
                        <div class="inner_filterBox">
                            <a href="javscript:void(0)" class="filterboxText dropdown-item">Date</a>
                            <a href="javscript:void(0)" class="filterboxText dropdown-item">Category</a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- mobile header --}}
            <div class="mobDigiHeader col-md-9">
                <div class="form-group mobHeadSearchBox">
                    <span class="fa fa-search form-control-feedback"></span>
                    <input type="text" class="form-control" placeholder="Search">
                </div>

                <a href="javascript:void(0)" class="mobHeadFilterBtn"><i class="fa-solid fa-filter"></i></a>
                <div class="mobFilterBox">
                    <h5 class="filterboxText">Date</h5>
                    <h5 class="filterboxText">Category</h5>
                </div>
            </div>
        </div>
        <div class="digiSec">
            <div class="digiInnerSec">
                <div class="container">
                    <div class="gridSec" id="gridId">
                        <div class="row g-5">
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="gridBox">
                                    <div class="inputCheck"><input type="checkbox" name="inputName" value="HTML">
                                    </div>
                                    <button class="dotIcon" data-target="#digitizedDetailsBox1" data-dot-open="0"
                                        data-bs-toggle="dropdown" aria-expanded="false" onclick="openLogoDigitizedDetails()"><i
                                            class="fa-solid fa-ellipsis-vertical" id="digitizedBox"></i>
                                    </button>

                                    <div class="dotDetailsBox dropdown-menu" id="digitizedDetailsBox1">
                                        <h5 class="dotBoxText">Download</h5>
                                        <h5 class="dotBoxText">Delete</h5>
                                        <h5 class="dotBoxText">Rename</h5>
                                        <h5 class="dotBoxText">View details</h5>
                                    </div>
                                    <div class="gridBoxImg">
                                        <img src="{{ asset('assets/images/logos/amazon.png') }}" alt="image1" />
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
                                    <button class="dotIcon"  data-dot-open="0"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="fa-solid fa-ellipsis-vertical"></i>
                                    </button>

                                    <div class="dotDetailsBox dropdown-menu" id="detailsBox2">
                                        <h5 class="dotBoxText">Download</h5>
                                        <h5 class="dotBoxText">Delete</h5>
                                        <h5 class="dotBoxText">Rename</h5>
                                        <h5 class="dotBoxText">View details</h5>
                                    </div>
                                    <div class="gridBoxImg">
                                        <img src="{{ asset('assets/images/logos/chanel.png') }}" alt="image1" />
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
                                    <button class="dotIcon"  data-dot-open="0"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="fa-solid fa-ellipsis-vertical"></i>
                                    </button>

                                    <div class="gridBoxImg">
                                        <img src="{{ asset('assets/images/logos/adidas.png') }}" alt="image1" />
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
                                    <div class="dotIcon"><i class="fa-solid fa-ellipsis-vertical"></i>
                                    </div>

                                    <div class="dotDetailsBox">
                                        <h5 class="dotBoxText">Download</h5>
                                        <h5 class="dotBoxText">Delete</h5>
                                        <h5 class="dotBoxText">Rename</h5>
                                        <h5 class="dotBoxText">View details</h5>
                                    </div>
                                    <div class="gridBoxImg">
                                        <img src="{{ asset('assets/images/logos/nike.png') }}" alt="image1" />
                                    </div>
                                    <div class="gridBoxText" onclick="openDetailBox()">
                                        <h4 class="prTitle">Grand Court Cloudfoam Comfort Shoes</h4>
                                        <h6 class="prDate">Apr 2, 2023</h6>
                                        <div class="dotIcon"><i class="fa-solid fa-ellipsis-vertical"></i>
                                        </div>
                                        <div class="dotDetailsBox">
                                            <h5 class="dotBoxText">Download</h5>
                                            <h5 class="dotBoxText">Edit</h5>
                                            <h5 class="dotBoxText">Delete</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                <div class="gridBox">
                                    <div class="inputCheck"><input type="checkbox" name="inputName" value="HTML">
                                    </div>
                                    <button class="dotIcon" data-dot-open="0"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="fa-solid fa-ellipsis-vertical"></i>
                                    </button>

                                    <div class="dotDetailsBox dropdown-menu" >
                                        <h5 class="dotBoxText">Download</h5>
                                        <h5 class="dotBoxText">Delete</h5>
                                        <h5 class="dotBoxText">Rename</h5>
                                        <h5 class="dotBoxText">View details</h5>
                                    </div>
                                    <div class="gridBoxImg">
                                        <img src="{{ asset('assets/images/logos/infinity.png') }}" alt="image1" />
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
                                    <button class="dotIcon"  data-dot-open="0"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="fa-solid fa-ellipsis-vertical"></i>
                                    </button>

                                    <div class="dotDetailsBox dropdown-menu" >
                                        <h5 class="dotBoxText">Download</h5>
                                        <h5 class="dotBoxText">Delete</h5>
                                        <h5 class="dotBoxText">Rename</h5>
                                        <h5 class="dotBoxText">View details</h5>
                                    </div>
                                    <div class="gridBoxImg">
                                        <img src="{{ asset('assets/images/logos/logo.png') }}" alt="image1" />
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
                                    <button class="dotIcon"  data-dot-open="0"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="fa-solid fa-ellipsis-vertical"></i>
                                    </button>

                                    <div class="dotDetailsBox dropdown-menu" >
                                        <h5 class="dotBoxText">Download</h5>
                                        <h5 class="dotBoxText">Delete</h5>
                                        <h5 class="dotBoxText">Rename</h5>
                                        <h5 class="dotBoxText">View details</h5>
                                    </div>
                                    <div class="gridBoxImg">
                                        <img src="{{ asset('assets/images/logos/HBC.png') }}" alt="image1" />
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
                                    <button class="dotIcon"  data-dot-open="0"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="fa-solid fa-ellipsis-vertical"></i>
                                    </button>

                                    <div class="dotDetailsBox dropdown-menu" >
                                        <h5 class="dotBoxText">Download</h5>
                                        <h5 class="dotBoxText">Delete</h5>
                                        <h5 class="dotBoxText">Rename</h5>
                                        <h5 class="dotBoxText">View details</h5>
                                    </div>
                                    <div class="gridBoxImg">
                                        <img src="{{ asset('assets/images/logos/twitter.png') }}" alt="image1" />
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
                                    <button class="dotIcon"  data-dot-open="0"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i
                                            class="fa-solid fa-ellipsis-vertical"></i>
                                    </button>

                                    <div class="dotDetailsBox dropdown-menu" >
                                        <h5 class="dotBoxText">Download</h5>
                                        <h5 class="dotBoxText">Delete</h5>
                                        <h5 class="dotBoxText">Rename</h5>
                                        <h5 class="dotBoxText">View details</h5>
                                    </div>
                                    <div class="gridBoxImg">
                                        <img src="{{ asset('assets/images/logos/yt.png') }}" alt="image1" />
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
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>


    @include('modal.uploadFileModal')

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
