        <!-- right side price calculator -->

        <div class="col-md-5">

            <div class="contact-outer-cont-2">

                <form id="contact-form" method="POST" action="<?=base_url()?>LeadsController/generateLeads" onsubmit="validateForm(event, this, 1)">
                    <input type="hidden" name="url" value="thank-you">
                    <input type="hidden" name="lead_id" value="">
                    <!-- Number input -->

                    <label for="" class="form-label-white">Phone Number</label>
                    <div class="form-outline mb-2">
                        <input type="tel" name="user_phone" class="form-control" placeholder="" />
                    </div>
                    <!-- Email input -->
                    <label for="" class="form-label-white">Email</label>
 
                    <div class="form-outline mb-2">
                        <input type="email"  name="user_email" class="form-control" placeholder="" />
                    </div>
                    <label for="" class="form-label-white">Services</label>

                    <div class="form-group row mb-2">

                        <div class="col-md-12">

                            <select name="type_of_service"   class="form-select selectservices select-css">
                            <option value="Web Design & Development">Select </option>
                                <option value="Web Design & Development">Web Design & Development</option>
                                <option value="SEO Services">SEO Services</option>
                                <option value="Social Media Marketing">Social Media Marketing</option>
                                <option value="PPC Services">PPC Services</option>
                                <option value="App Design & Development">App Design & Development </option>
                                <option value="Other">Other </option>

                            </select>

                        </div>

                    </div>
                    <div class="form-outline otherservices mb-2" style="display: none;">
                        <input type="text"  name="other_services" class="form-control" placeholder="Other Services" />
                    </div>

                    <label for="" class="form-label-white">Name</label>

                    <div class="form-outline mb-2">
                        <input type="text" name="user_name" class="form-control" placeholder="" />
                    </div>

                    <label for="" class="form-label-white">Your Message</label>

                    <!-- Message input -->
                    <div class="form-outline mb-2">
                        <textarea name="comments_by_client" class="form-control" id="message-area" rows="4"
                            placeholder=""></textarea>
                    </div>


                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mb-2 bg-pink">Submit Now</button>
                </form>

            </div>
        </div>
        <!-- Price calculater -->

