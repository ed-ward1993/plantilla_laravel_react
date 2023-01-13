import React, { useState } from 'react';
import BottomHeader from './BottomHeader';
import MainMenu from './MainMenu';
import TopHeader from './TopHeader';
import Helmet from 'react-helmet';

export default function Authenticated({ title, children }) {

    return (
        <div>
            <Helmet titleTemplate="%s | Ping CRM" title={title} />
        <div className='flex flex-col'>
            <div className='flex flex-col h-screen'>
                <div className="md:flex">
                    <TopHeader />
                    <BottomHeader />
                </div>
                <div className="flex flex-grow overflow-hidden">
                    <MainMenu className="flex-shrink-0 hidden w-56 p-12 overflow-y-auto bg-indigo-800 md:block" />
                    <div className="w-full px-4 py-8 overflow-hidden overflow-y-auto md:p-12 bg-indigo-50">

                        {children}
                    </div>
                </div>
            </div>

        </div>
        </div>
    );
}
