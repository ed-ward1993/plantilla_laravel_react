import React from 'react';
import MainMenuItem from './MainMenuItem';

export default ({ className }) => {
  return (
    <div className={className}>
      <MainMenuItem text="Dashboard" link="dashboard" icon="dashboard" />
      <MainMenuItem text="Index" link="index" icon="office" />
      <MainMenuItem text="Post" link="posts" icon="apple" />

    </div>
  );
};
