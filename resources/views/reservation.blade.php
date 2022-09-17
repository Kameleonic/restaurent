<!-- ***** Reservation Us Area Starts ***** -->
<section class="section" id="reservation">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="left-text-content">
                    <div class="section-heading">
                        <h6>Contact Us</h6>
                        <h2>Here You Can Make A Reservation Or Just walkin to our cafe</h2>
                    </div>
                    <p>Donec pretium est orci, non vulputate arcu hendrerit a. Fusce a eleifend riqsie, namei
                        sollicitudin urna diam, sed commodo purus porta ut.</p>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="phone">
                                <i class="fa fa-phone"></i>
                                <h4>Phone Numbers</h4>
                                <span><a href="#">080-090-0990</a><br><a href="#">080-090-0880</a></span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="message">
                                <i class="fa fa-envelope"></i>
                                <h4>Emails</h4>
                                <span><a href="#">hello@company.com</a><br><a
                                        href="#">info@company.com</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-form">
                    <form id="contact" action="{{ url('reserve') }}" method="post">
                        @method('POST')
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <h4>Reserve a Table...</h4>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <fieldset class="flex gap-4 justify-content-between">
                                    <div class="flex flex-col flex-1">
                                        <label for="first_name">First Name:
                                            <span class="required"></span>
                                        </label>
                                        <input name="first_name" type="text" id="firstName" placeholder="John..."
                                            required />
                                    </div>
                                    <div class="flex flex-col flex-1">
                                        <label for="last_name">Last Name:
                                            <span class="required"></span>
                                        </label>
                                        <input class="required" name="last_name" type="text" id="lastName"
                                            placeholder="Smith..." required />
                                    </div>

                                </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <fieldset>
                                    <label for="email">Email:
                                        <span class="required"></span>
                                    </label>
                                    <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*"
                                        placeholder="someone@example.com" required />
                                </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <fieldset>
                                    <label for="phone">Contact Number:</label>
                                    <input name="phone" type="tel" id="phone" placeholder="" required>
                                </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <fieldset>
                                    <label for="guest_count">No. of Guests:
                                        <span class="required"></span></label>
                                    <input name="guest_count" type="number" placeholder="0-10">
                                </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <div id="filterDate2">

                                    <div class="flex gap-4 justify-between">
                                        <div class="flex flex-col sm:w-full lg:w-[146px]">
                                            <label for="date">Date:
                                                <span class="required"></span></label>
                                            <input name="date" id="date" type="date"
                                                class="form-control rounded-lg text-black-50" required>
                                            <div class="input-group-addon">
                                                <span class="glyphicon glyphicon-th"></span>
                                            </div>
                                        </div>
                                        <div class="flex flex-col flex-1">
                                            <label for="guest_count">Time:
                                                <span class="required"></span></label>
                                            <input name="time" type="time" list="businessHours" required />
                                            <datalist id="businessHours">
                                                <option value="17:00"></option>
                                                <option value="17:30"></option>
                                                <option value="18:00"></option>
                                                <option value="18:30"></option>
                                                <option value="19:00"></option>
                                                <option value="19:30"></option>
                                                <option value="20:00"></option>
                                                <option value="20:30"></option>
                                                <option value="21:00"></option>
                                                <option value="21:30"></option>
                                                <option value="22:00"></option>
                                            </datalist>
                                            {{-- <input type="time" name="time" placeholder="Time&nbsp;*"> --}}
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12">

                                <fieldset>
                                    <label for="allergies">Allergies:</label>
                                    <select name="allergies" type="select" />


                                    <option selected>None
                                    </option>
                                    <option value="">Lactose Intolerant</option>
                                    <option value="">Gluten-free</option>
                                    <option value="">Nuts/Peanuts</option>

                                    </select>

                                </fieldset>

                            </div>

                        </div>




                        <fieldset>
                            <textarea name="message" rows="6" id="message" placeholder="Start typing..." required=""></textarea>
                        </fieldset>


                        <fieldset>
                            <button type="submit" id="form-submit" class="main-button-icon">Make A
                                Reservation</button>
                        </fieldset>

                </div>
                </form>
            </div>

        </div>
    </div>
    </div>
    </div>
</section>
<!-- ***** Reservation Area Ends ***** -->
