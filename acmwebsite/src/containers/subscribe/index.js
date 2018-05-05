import React from 'react';
import NavigationSide from "../../components/navigation_side";
import Header from "../../components/header";
import Navigation from "../../components/navigation";
import Footer from "../../components/footer";
import SubscribeImage from '../../media/subscribe.JPG';

const Subscribe = () => {
    return(
    <div>
        <NavigationSide name={'subscribe'}/>
        <Header image={SubscribeImage} heading={'Subscribe'} subtext={'Join Us. Free Pizza.'} imagePosition={'center'}/>
        <Navigation name={'subscribe'}/>
        <div className="uk-section uk-section-default" role='main'>
            <div className='uk-container'>
                <div className='col-md-12' id='mc_embed_signup'>
                    <form action="https://fullerton.us11.list-manage.com/subscribe/post?u=3dbde654283a22318e4cd016d&id=693fc5f30b" className='validate' id='mc-embedded-subscribe-form' method='post' name='mc-embedded-subscribe-form' noValidate="" target='_blank'>
                        <fieldset className='uk-fieldset'>
                            <h1>Join our Mailing List</h1>
                            <legend className='uk-legend'>Join the mailing list and connect with us on Titan Link <a href='https://fullerton.campuslabs.com/engage/organization/acm' className='uk-link-muted' target='_blank' rel="noopener noreferrer">here</a> and our Discord located <a href='https://discord.gg/2zq79yE' className='uk-link-muted'
                                                                                                               target='_blank' rel="noopener noreferrer">here</a>.</legend>
                        </fieldset>
                            <div className='uk-grid-small' id='mc_embed_signup_scroll' uk-grid="">
                                <div className='uk-width-1-2@s'><input name='FNAME' className='uk-input' id='mce-FNAME' alt="First Name" label="" placeholder="First Name" title='name' /></div>
                                <div className='uk-width-1-2@s'><input name='LNAME' className='uk-input' id='mce-LNAME' alt="Last Name" label="" placeholder="Last Name" title='name' /></div>
                                <div className="uk-remove-margin form-group mc-field-group uk-width-1-1"><input name='EMAIL' className='uk-input' id='mce-EMAIL' alt='email' label="" placeholder="Email Address *" title='name' required /></div>
                                <div className='clear' id='mce-responses'>
                                    <div className='response' id='mce-error-response' style={{display:'none'}}/>
                                    <div className='response' id='mce-success-response' style={{display:'none'}}/>
                                </div>
                                <div className='col-md-12' style={{position:'absolute',left:'-5000px'}} aria-hidden='true'><input name='b_3dbde654283a22318e4cd016d_693fc5f30b' tabIndex={-1} /></div>
                                <div className="uk-remove-margin uk-text-center uk-width-1-1@s"><input name='subscribe' className="uk-button get uk-button-default" id='mc-embedded-subscribe' type='submit' value='Subscribe' /></div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
        <Footer/>
    </div>
);
};

export default Subscribe;