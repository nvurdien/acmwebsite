import React from 'react';

const Footer = () => {
    return <div className="uk-section uk-section-primary">
        <div className='uk-container'>
            <div className="uk-child-width-1-2@s uk-child-width-1-3@m" uk-grid="">
                <div>
                    <h3>ACM <span className="fa fa-fw fa-pulse fa-star"/> CSUF</h3>
                    <p>Association of Computing Machinery<br/>California State University, Fullerton</p></div>
                <div>
                    <h3>Find us on Social Media</h3>
                    <p>
                        <a href='https://www.twitter.com/acmcsuf' className="uk-margin-small-right uk-icon-button" aria-label="twitter link" target='_blank' rel="noopener noreferrer"  title='@acmcsuf' uk-icon="icon: twitter" uk-tooltip="pos: bottom"/>
                        <a href='https://www.facebook.com/groups/acmcsuf' className="uk-margin-small-right uk-icon-button" aria-label="facebook group link" rel="noopener noreferrer"  target='_blank' title='/group/acmcsuf' uk-icon="icon: facebook" uk-tooltip="pos: top"/>
                        <a href='https://www.instagram.com/acmcsuf' className="uk-margin-small-right uk-icon-button" aria-label="instagram link" target='_blank' rel="noopener noreferrer"  title='@acmcsuf' uk-icon="icon: instagram" uk-tooltip="pos: right"/>
                    </p>
                </div>
                <div>
                    <h3>Meetings</h3>
                    <p>ICPC Practice @ CS101 starting 9/22/17<br/>
                        <span className='uk-margin-small-right' uk-icon="icon: git-fork"/>
                        Bi-weekly Fridays 4-6pm
                    </p>
                    <p>Project Jams @ CS300 starting 9/29/17<br/>
                        <span className='uk-margin-small-right' uk-icon="icon: git-branch"/>
                        Bi-weekly Fridays 4-8pm
                    </p>
                </div>
            </div>
        </div>
    </div>
};

export default Footer;