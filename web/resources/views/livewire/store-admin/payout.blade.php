<div class="app-main flex-column flex-row-fluid mt-4 pt-4 ">

    <div class="app-container">
        <div class="payoutPageSec pb-6 d-flex flex-row me-3">
            <!--begin::Title-->
            <div class="col-md-3">
                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Payout
                </h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">

                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted"><a href="{{ route('payout') }}"  >Payout</a></li>
                    <!--end::Item-->
                </ul>
            </div>
        </div>
        <div class="payoutSec">
            <div class="payoutInnerSec">

                <div class="summeryCard">
                    <div class="card">
                        <div class="cardTextBox">
                            <h4 class="cardText">User's earnings</h4>
                            <h5 class="cardTextDate">Apr 2, 2023</h5>
                        </div>
                        <h2 class="userEarn">
                            $63,240</h2>
                    </div>
                    <div class="card">
                        <div class="cardTextBox">
                            <h4 class="cardText">Total earnings</h4>
                            <h5 class="cardTextDate">Apr 2, 2023</h5>
                        </div>
                        <h2 class="totalEarn">
                            $63,240</h2>
                    </div>
                    <div class="card">
                        <div class="cardTextBox">
                            <h4 class="cardText">Pending earnings</h4>
                            <h5 class="cardTextDate">Apr 2, 2023</h5>
                        </div>
                        <h2 class="pendEarn">
                            $63,240</h2>
                    </div>
                    <div class="card">
                        <div class="cardTextBox">
                            <h4 class="cardText">Recent earnings</h4>
                            <h5 class="cardTextDate">Apr 2, 2023</h5>
                        </div>
                        <h2 class="recentEarn">
                            $63,240</h2>
                    </div>
                </div>


                <div class="payOutFlexBox">
                    <div class="listSec" id="">
                        <div class="transHeader">

                            <a href="javascript:void(0)" class="headFilterBtn"><i
                                    class="fa-solid fa-filter"></i>Filter</a>
                            <div class="filterBox">
                                <h5 class="filterboxText">Date</h5>
                                <h5 class="filterboxText">Amount</h5>
                                <h5 class="filterboxText">Status</h5>
                            </div>
                            <div class="form-group transSerchBox">
                                <span class="fa fa-search form-control-feedback"></span>
                                <input type="text" class="form-control" placeholder="Transaction History">
                            </div>
                        </div>

                        <div class="payoutInnerSec">
                            <table class="w-100 payoutTable">
                                <tr class="tableHead text-center">
                                    <th>Logo</th>
                                    <th>Date</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>Payout Method</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                <tbody class="w-100">
                                    <tr class="payoutRow text-center">
                                        <td class="payoutCol">
                                            <a href="" class="payoutImg"><img src="assets/images/digiImage1.png"
                                                    alt="image1" /></a>
                                        </td>
                                        <td>Apr 2, 2023</td>
                                        <td>$10</td>
                                        <td><a href="" class="listError">Error</a></td>
                                        <td>Online</td>
                                        <td>
                                            <a href="" class="payoutEditIcon">
                                                <i class="fa-solid fa-pen"></i>
                                            </a>
                                        </td>

                                        <td>
                                            <a href="" class="payoutDeleteIcon">
                                                <i class="fa-solid fa-trash-can"></i>
                                            </a>
                                        </td>
                                    </tr>

                                    <tr class="payoutRow text-center">
                                        <td class="payoutCol">
                                            <a href="" class="payoutImg"><img src="assets/images/digiImage1.png"
                                                    alt="image1" /></a>
                                        </td>
                                        <td>Apr 2, 2023</td>
                                        <td>$10</td>
                                        <td><a href="" class="listPending">Pending</a></td>
                                        <td>Online</td>
                                        <td>
                                            <a href="" class="payoutEditIcon">
                                                <i class="fa-solid fa-pen"></i>
                                            </a>
                                        </td>

                                        <td>
                                            <a href="" class="payoutDeleteIcon">
                                                <i class="fa-solid fa-trash-can"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="payoutRow text-center">
                                        <td class="payoutCol">
                                            <a href="" class="payoutImg"><img src="assets/images/digiImage1.png"
                                                    alt="image1" /></a>
                                        </td>
                                        <td>Apr 2, 2023</td>
                                        <td>$10</td>
                                        <td><a href="" class="listProcess">Process</a></td>
                                        <td>Online</td>
                                        <td>
                                            <a href="" class="payoutEditIcon">
                                                <i class="fa-solid fa-pen"></i>
                                            </a>
                                        </td>

                                        <td>
                                            <a href="" class="payoutDeleteIcon">
                                                <i class="fa-solid fa-trash-can"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="payoutRow text-center">
                                        <td class="payoutCol">
                                            <a href="" class="payoutImg"><img src="assets/images/digiImage1.png"
                                                    alt="image1" /></a>
                                        </td>
                                        <td>Apr 2, 2023</td>
                                        <td>$10</td>
                                        <td><a href="" class="listError">Error</a></td>
                                        <td>Online</td>
                                        <td>
                                            <a href="" class="payoutEditIcon">
                                                <i class="fa-solid fa-pen"></i>
                                            </a>
                                        </td>

                                        <td>
                                            <a href="" class="payoutDeleteIcon">
                                                <i class="fa-solid fa-trash-can"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="payoutRow text-center">
                                        <td class="payoutCol">
                                            <a href="" class="payoutImg"><img
                                                    src="assets/images/digiImage1.png" alt="image1" /></a>
                                        </td>
                                        <td>Apr 2, 2023</td>
                                        <td>$10</td>
                                        <td><a href="" class="listProcess">Process</a></td>
                                        <td>Online</td>
                                        <td>
                                            <a href="" class="payoutEditIcon">
                                                <i class="fa-solid fa-pen"></i>
                                            </a>
                                        </td>

                                        <td>
                                            <a href="" class="payoutDeleteIcon">
                                                <i class="fa-solid fa-trash-can"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="payoutRow text-center">
                                        <td class="payoutCol">
                                            <a href="" class="payoutImg"><img
                                                    src="assets/images/digiImage1.png" alt="image1" /></a>
                                        </td>
                                        <td>Apr 2, 2023</td>
                                        <td>$10</td>
                                        <td><a href="" class="listError">Error</a></td>
                                        <td>Online</td>
                                        <td>
                                            <a href="" class="payoutEditIcon">
                                                <i class="fa-solid fa-pen"></i>
                                            </a>
                                        </td>

                                        <td>
                                            <a href="" class="payoutDeleteIcon">
                                                <i class="fa-solid fa-trash-can"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="payoutRow text-center">
                                        <td class="payoutCol">
                                            <a href="" class="payoutImg"><img
                                                    src="assets/images/digiImage1.png" alt="image1" /></a>
                                        </td>
                                        <td>Apr 2, 2023</td>
                                        <td>$10</td>
                                        <td><a href="" class="listError">Error</a></td>
                                        <td>Online</td>
                                        <td>
                                            <a href="" class="payoutEditIcon">
                                                <i class="fa-solid fa-pen"></i>
                                            </a>
                                        </td>

                                        <td>
                                            <a href="" class="payoutDeleteIcon">
                                                <i class="fa-solid fa-trash-can"></i>
                                            </a>
                                        </td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="payMethodSec">
                        <div class="payMethod">
                            <div class="payMethodInnerBox">
                                {{-- <div class="errorAlert">
                                    <span class="errorAlertBox"><i class="fa-solid fa-triangle-exclamation"></i>
                                        <h5 class="errorAlertText">Error</h5>
                                    </span>
                                    <span class="errorAlertBoxCl"><i class="fa-solid fa-xmark"></i></span>
                                </div> --}}

                                <div class="payTaxBox">
                                    <h4 class="payTaxTitle">Tax Information:</h4>
                                    <div class="payTaxBoxInner">
                                        {{-- <a href="javascript:void(0)" class="payTaxBoxItem">
                                            <span class="taxIcon"><img src="assets/images/icon/tax.svg"
                                                    alt="image" /></span>
                                            <h5 class="payTaxTitle">Tax Info</h5>
                                        </a> --}}

                                        <button class="taxDrpdwn" data-target="#detailsBox1" data-dot-open="0"
                                            data-bs-toggle="dropdown" aria-expanded="false"><i
                                                class="fa-solid fa-arrow-down"></i>Tax Info
                                        </button>
                                        <div class="dotDetailsBox dropdown-menu" id="detailsBox1">
                                            <h5 class="dotBoxText">1099 forms</h5>
                                            <h5 class="dotBoxText">ITR-2 form</h5>
                                            <h5 class="dotBoxText">ITR-3 form</h5>
                                            <h5 class="dotBoxText">ITR-4 form</h5>
                                        </div>
                                        <a href="javascript:void(0)" class="payTaxInfo"><span class="taxImg"><img
                                                    src="assets/images/icon/tax.svg" alt="image" /></span>
                                            Update Tax Info
                                        </a>

                                    </div>
                                </div>

                                <div class="payMethodSideBox">
                                    <h4 class="payMethodTitle">Payment Method:</h4>
                                    <div class="payMethodBox">
                                        <div class="payMethodBoxItem">
                                            <input type="radio" id="css" name="bank" value="CSS">
                                            <span class="payCardIcon">
                                                <i class="fa-solid fa-building-columns"></i>
                                                <h4 class="payMethodPara">Bank Transfer</h4>
                                            </span>
                                        </div>
                                        <div class="payMethodBoxItem">
                                            <input type="radio" id="css" name="bank" value="CSS">
                                            <span class="payCardIcon">
                                                <i class="fa-brands fa-cc-paypal"></i>
                                                <h4 class="payMethodPara">PayPal</h4>
                                            </span>
                                        </div>
                                        <div class="payMethodBoxItem">
                                            <input type="radio" id="css" name="bank" value="CSS">
                                            <span class="payCardIcon">
                                                <i class="fa-solid fa-money-check"></i>
                                                <h4 class="payMethodPara">Bank Transfer</h4>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="faqSideBox">
                                    <h4 class="faqTitle">FAQs:</h4>
                                    <div class="accordion" id="accordionExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingOne">
                                                <button class="accordion-button accTitle" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                    aria-expanded="true" aria-controls="collapseOne">
                                                    Accordion Item #1
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse show"
                                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>This is the first item's accordion body.</p>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item mt-2">
                                            <h2 class="accordion-header" id="headingTwo">
                                                <button class="accordion-button accTitle collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                    aria-expanded="false" aria-controls="collapseTwo">
                                                    Accordion Item #2
                                                </button>
                                            </h2>
                                            <div id="collapseTwo" class="accordion-collapse collapse"
                                                aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>This is the first item's accordion body.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item mt-2">
                                            <h2 class="accordion-header" id="headingThree">
                                                <button class="accordion-button accTitle collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                    aria-expanded="false" aria-controls="collapseThree">
                                                    Accordion Item #3
                                                </button>
                                            </h2>
                                            <div id="collapseThree" class="accordion-collapse collapse"
                                                aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>This is the first item's accordion body.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="contactModalBtnBox">
                                <a class="contactModalBtn" data-bs-toggle="modal" href="#exampleModalToggle"
                                    role="button"><i class="fa-solid fa-headset"></i>Get A Quote</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>




    <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
        tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title font-bold text-3xl modalTitle" id="exampleModalToggleLabel">Contact Us</h1>
                    <button id="closeModal" class="modal-close clIcon" onclick="closeLogoModal()"><i
                            class="fa-solid fa-xmark"></i></button>
                </div>
                <div class="modal-body frmModal">
                    <form class="row g-3">
                        <div class="col-md-6">
                            <label for="fname" class="font-semibold text-gray-800">First Name</label>
                            <input type="text" id="fname" name="firstname" class="w-full mt-3"
                                placeholder="Your name..">
                        </div>
                        <div class="col-md-6">
                            <label for="lname" class="font-semibold text-gray-800">Last Name</label>
                            <input type="text" id="lname" name="lastname" class="w-full mt-3"
                                placeholder="Your last name..">
                        </div>
                        <div class="col-md-12">
                            <label for="inputEmail4" class="form-label font-semibold text-gray-800 m-0">Email</label>
                            <input type="email" class="form-control w-full mt-3" id="inputEmail4">
                        </div>
                        <div class="col-md-12">
                            <textarea id="w3review" name="w3review" rows="4" cols="50"
                                class="w-full mt-3 font-semibold text-gray-800">Your Answer..</textarea>
                        </div>
                        <div class="col-12 w-full">
                            <button type="submit"
                                class="btn submitBtn p-0 mt-3
                            ">Submit</button>
                        </div>
                    </form>
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
