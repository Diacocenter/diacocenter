import React from "react";
import { Routes, Route } from "react-router-dom";

import Dashboard from "../views/jsx/Dashboard";
import ContactDetail from "../views/jsx/ContactDetail";
import SocialAddress from "../views/jsx/SocialAddress";
import ChangePassword from "../views/jsx/ChangePassword";
import MyDocument from "../views/jsx/MyDocument";
import Agreement from "../views/jsx/Agreement";
import DeleteAccount from "../views/jsx/DeleteAccount";
import Applied from "../views/jsx/Applied";
import Communications from "../views/jsx/Communications";
import { Recommend } from "@mui/icons-material";
import Recommended from "../views/jsx/Recommended";
import Completed from "../views/jsx/Completed";
import HelpSupport from "../views/jsx/HelpSupport";
import Logout from "../views/jsx/Logout";
import Wallet from "../views/jsx/Wallet";
import PrivacyPolicy from "../views/jsx/PrivacyPolicy";
import Activities from "../views/jsx/Activities";
import AgreementDetail from "../views/jsx/AgreementDetail";
import Discover from "../views/jsx/Discover";
import Education from "../views/jsx/Education";
import Experience from "../views/jsx/Experience";
import Accepted from "../views/jsx/Accepted";
import DeleteAccountConfirmation from "../views/jsx/DeleteAccountConfirmation";
import Setting from "../views/jsx/Setting";
import Communication from "../views/jsx/Communication";
import Projects from "../views/jsx/Projects";
import NewProject from "../views/jsx/NewProject";
import ShowProject from "../views/jsx/ShowProject";
import AddAgreement from "./../views/jsx/AddAgreement"

console.log("Content jsx ");

export default function Content(props) {
    return (
        // <div className="main-content w-100 position-relative p-4">
        <Routes>
            <Route path="technology-seeker-panel">
                <Route exact path="" element={<Dashboard />} />
                <Route path="new-project" element={<NewProject/>}/>
                <Route path="show-project" element={<ShowProject/>}/>
                <Route path="add-agreement" element={<AddAgreement/>}/>
                <Route path="account-info">
                    <Route path="contact-detail" element={<ContactDetail />} />
                    <Route path="social-address" element={<SocialAddress />} />
                    <Route path="documents" element={<MyDocument />} />
                    <Route path="education" element={<Education />} />
                    <Route path="experience" element={<Experience />} />
                </Route>
                <Route path="project" element={<Projects />}>
                    {/* <Route path="applied" element={<Applied/>}/>
                        <Route path="accepted" element={<Accepted/>}/>
                        <Route path="completed" element={<Completed/>}/> */}
                </Route>
                <Route path="discover" element={<Discover />} />
                <Route path="my-activities" element={<Activities />} />
                <Route path="wallet" element={<Wallet />} />
                <Route path="agreement" element={<Agreement />} />
                <Route path="agreement/:id" element={<AgreementDetail />} />
                <Route path="communications" element={<Communication />} />
                <Route path="setting" element={<Setting />} />
                <Route path="privacy-policy" element={<PrivacyPolicy />} />
                <Route path="change-password" element={<ChangePassword />} />
                <Route path="activities" element={<Activities />} />
                <Route path="delete-account" element={<DeleteAccount />} />
                <Route
                    path="delete-account/delete-account-confirm"
                    element={<DeleteAccountConfirmation />}
                />
                <Route path="logout" element={<Logout />} />
            </Route>
        </Routes>
        // </div>
    );
}
