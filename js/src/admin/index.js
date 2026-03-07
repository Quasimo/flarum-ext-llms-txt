import app from 'flarum/admin/app';
import LlmsTxtSettingsPage from './components/LlmsTxtSettingsPage';

app.initializers.add('quasimo-llms-txt', () => {
  app.extensionData
    .for('quasimo-llms-txt')
    .registerPage(LlmsTxtSettingsPage);
});
