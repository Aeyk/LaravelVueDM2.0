// import { mount } from '@vue/test-utils';
import MailingListHeader from 'MailingListHeader.vue';

describe ("MailingListHeader", () => {
  test('it shows link to upload  page', () => {
    const wrapper = mount(MailingListHeader, {});
    expect(wrapper.text()).toContain('Mailing List Upload');
  });

  test('it shows link to index page', () => {
    const wrapper = mount(MailingListHeader, {});
    expect(wrapper.text()).toContain('List of Mailing');
  });
});
