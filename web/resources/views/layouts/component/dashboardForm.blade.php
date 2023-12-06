<div class="formSec">
    <div class="formInner">
        <div class="formHeader">
            <span class="number">Step 2/4</span>
            <h3 class="text">Fill up store details</h3>
        </div>
        <div class="formBody">
            <form class="row g-6">
                <div class="col-md-12">
                    <input type="text" class="form-control" id="inputName" placeholder="First name">
                </div>

                <div class="col-2">
                    <label for="phone" id="phnoLabel">+91</label>
                </div>
                <div class="col-10">
                    <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"
                        placeholder="Phone Number" class="w-100">
                </div>

                <div class="col-md-12">
                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email address">
                </div>

                <div class="col-12">
                    <input type="text" class="form-control" id="inputAddress" placeholder="Website (If Any)">
                </div>
                <div class="col-12">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" placeholder="Description"></textarea>
                </div>
            </form>
        </div>
    </div>
    <div class="formFooter">
        <a href="javascript:void(0)" class="arrowIcon" onclick="goBackToLogo()">
            <span class="icon"><img src="assets/images/icon/prevIcon.svg" alt="previcon" /></span>
        </a>
        <a href="javascript:void(0)" class="footerBtn" onclick="goToProduct()">
            <span class="title">Next</span>
            <span class="icon"><i class="fa-solid fa-arrow-right"></i></span>
        </a>
    </div>

</div>
