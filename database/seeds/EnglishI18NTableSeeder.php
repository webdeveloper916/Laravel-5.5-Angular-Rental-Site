<?php

use Illuminate\Database\Seeder;

class EnglishI18NTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('i18n')->where('language_id' , '1')->delete();

        $sql = "insert into i18n  (`label_key`, `label` , `language_id` ) VALUES
                ('Finances', 'Finances', 1),
                ('Invoices', 'Invoices', 1),
                ('Payments', 'Payments', 1),
                ('No.', 'No.', 1),
                ('Status', 'Status', 1),
                ('Amount', 'Amount', 1),
                ('Due Date', 'Due Date', 1),
                ('Property', 'Property', 1),
                ('Tenant', 'Tenant', 1),
                ('Actions', 'Actions', 1),
                ('ID', 'ID', 1),
                ('Date Created', 'Date Created', 1),
                ('Payment Method', 'Payment Method', 1),
                ('Publish Language', 'Publish Language', 1),
                ('Publish', 'Publish', 1),
                ('Index Views', 'Index Views', 1),
                ('Add New Translation', 'Add New Translation', 1),
                ('Default English Key', 'Default English Key', 1),
                ('Translation', 'Translation', 1),
                ('Add', 'Add', 1),
                ('Current Translations', 'Current Translations', 1),
                ('Save', 'Save', 1),
                ('back', 'back', 1),
                ('New Document', 'New Document', 1),
                ('File Name', 'File Name', 1),
                ('Privacy', 'Privacy', 1),
                ('Tenants', 'Tenants', 1),
                ('Upload your document', 'Upload your document', 1),
                ('Drag and drop or Click to select', 'Drag and drop or Click to select', 1),
                ('Document file is required', 'Document file is required', 1),
                ('Save Changes', 'Save Changes', 1),
                ('Cancel', 'Cancel', 1),
                ('Documents', 'Documents', 1),
                ('Folder', 'Folder', 1),
                ('File', 'File', 1),
                ('Description', 'Description', 1),
                ('Created', 'Created', 1),
                ('Size', 'Size', 1),
                ('Ask us directly', 'Ask us directly', 1),
                ('Name', 'Name', 1),
                ('Assign tenant to property!', 'Assign tenant to property!', 1),
                ('Properties', 'Properties', 1),
                ('No property', 'No property', 1),
                ('No unit', 'No unit', 1),
                ('Unit', 'Unit', 1),
                ('Start date', 'Start date', 1),
                ('End date', 'End date', 1),
                ('Collection day', 'Collection day', 1),
                ('Rent', 'Rent', 1),
                ('Edit tenant', 'Edit tenant', 1),
                ('Invite new tenant', 'Invite new tenant', 1),
                ('Add row', 'Add row', 1),
                ('Overview', 'Overview', 1),
                ('Profile Settings', 'Profile Settings', 1),
                ('Preferences', 'Preferences', 1),
                ('View Property', 'View Property', 1),
                ('Settings', 'Settings', 1),
                ('Tenant Info', 'Tenant Info', 1),
                ('Tenant name', 'Tenant name', 1),
                ('Email', 'Email', 1),
                ('Tenant email', 'Tenant email', 1),
                ('Contract period', 'Contract period', 1),
                ('Current Rent', 'Current Rent', 1),
                ('Account Settings', 'Account Settings', 1),
                ('Field is required', 'Field is required', 1),
                ('Save Settings', 'Save Settings', 1),
                ('New Tenant', 'New Tenant', 1),
                ('Transaction', 'Transaction', 1),
                ('Recurring', 'Recurring', 1),
                ('Amount Total', 'Amount Total', 1),
                ('Amount Payed', 'Amount Payed', 1),
                ('Name is required', 'Name is required', 1),
                ('Email field is not valid', 'Email field is not valid', 1),
                ('Start date is required!', 'Start date is required!', 1),
                ('Start date should be before end date!', 'Start date should be before end date!', 1),
                ('End date is required!', 'End date is required!', 1),
                ('End date should be after start date!', 'End date should be after start date!', 1),
                ('Manage property transactions', 'Manage property transactions', 1),
                ('Assign transaction', 'Assign transaction', 1),
                ('Add unit title here...', 'Add unit title here...', 1),
                ('Unit title', 'Unit title', 1),
                ('Title is required', 'Title is required', 1),
                ('Internal Id', 'Internal Id', 1),
                ('Have no fear, your rent will be here with automated collection. Check our pricing or contact us directly.', 'Have no fear, your rent will be here with automated collection. Check our pricing or contact us directly.', 1),
                ('Collect rent', 'Collect rent', 1),
                ('Have multiple accounts where you share listings? Automate your process.', 'Have multiple accounts where you share listings? Automate your process.', 1),
                ('Share when vacant', 'Share when vacant', 1),
                ('Delete', 'Delete', 1),
                ('Find new tenants', 'Find new tenants', 1),
                ('Share on multiple platforms, manage just here', 'Share on multiple platforms, manage just here', 1),
                ('What type of tenants you prefer?', 'What type of tenants you prefer?', 1),
                ('Students', 'Students', 1),
                ('Working', 'Working', 1),
                ('All', 'All', 1),
                ('Where would you like to share?', 'Where would you like to share?', 1),
                ('Social Media', 'Social Media', 1),
                ('Online platforms', 'Online platforms', 1),
                ('About the property', 'About the property', 1),
                ('Not Paid', 'Not Paid', 1),
                ('This month', 'This month', 1),
                ('Property units', 'Property units', 1),
                ('Address', 'Address', 1),
                ('Activity', 'Activity', 1),
                ('Events', 'Events', 1),
                ('Tasks', 'Tasks', 1),
                ('Announcements', 'Announcements', 1),
                ('No activity yet!', 'No activity yet!', 1),
                ('No events yet!', 'No events yet!', 1),
                ('No announcements yet!', 'No announcements yet!', 1),
                ('Read', 'Read', 1),
                ('Open', 'Open', 1),
                ('Add units and assign transactions to their tenants first.', 'Add units and assign transactions to their tenants first.', 1),
                ('Manage transactions', 'Manage transactions', 1),
                ('Add your photo', 'Add your photo', 1),
                ('Auto listing', 'Auto listing', 1),
                ('Property info', 'Property info', 1),
                ('Transactions', 'Transactions', 1),
                ('Other', 'Other', 1),
                ('Transaction category', 'Transaction category', 1),
                ('Add transaction description here...', 'Add transaction description here...', 1),
                ('No recurring', 'No recurring', 1),
                ('Reccuring?', 'Reccuring?', 1),
                ('Amount is required', 'Amount is required', 1),
                ('Tax', 'Tax', 1),
                ('Included', 'Included', 1),
                ('Total', 'Total', 1),
                ('New Property', 'New Property', 1),
                ('ID', 'ID', 1),
                ('Image', 'Image', 1),
                ('Date', 'Date', 1),
                ('Provide your property details', 'Provide your property details', 1),
                ('The more, the easier for you later', 'The more, the easier for you later', 1),
                ('Not sure what to choose? Check our pricing page', 'Not sure what to choose? Check our pricing page', 1),
                ('Not sure what to choose?', 'Not sure what to choose?', 1),
                ('Enable rent collection for this property?', 'Enable rent collection for this property?', 1),
                ('Enable auto listing to get new tenants?', 'Enable auto listing to get new tenants?', 1),
                ('Title', 'Title', 1),
                ('Property title is required', 'Property title is required', 1),
                ('Street, Number, City, Country and see the magic', 'Street, Number, City, Country and see the magic', 1),
                ('Address is required', 'Address is required', 1),
                ('City', 'City', 1),
                ('Country', 'Country', 1),
                ('Property type', 'Property type', 1),
                ('Add unit', 'Add unit', 1),
                ('Add property description here...', 'Add property description here...', 1),
                ('Add photos to gallery', 'Add photos to gallery', 1),
                ('Description is required', 'Description is required', 1),
                ('Reccuring transaction', 'Reccuring transaction', 1),
                ('Deposit Relay', 'Deposit Relay', 1),
                ('Deposit Relay status', 'Deposit Relay status', 1),
                ('Submission ID', 'Submission ID', 1),
                ('Move in date', 'Move in date', 1),
                ('Deposit Amount', 'Deposit Amount', 1),
                ('Action', 'Action', 1),
                ('Landlord', 'Landlord', 1),
                ('Edit Deposit Relay', 'Edit Deposit Relay', 1),
                ('This is You', 'This is You', 1),
                ('Profile', 'Profile', 1),
                ('Personal Info', 'Personal Info', 1),
                ('Change Avatar', 'Change Avatar', 1),
                ('Change Password', 'Change Password', 1),
                ('Privacy & Notifications', 'Privacy & Notifications', 1),
                ('Enter your name', 'Enter your name', 1),
                ('Enter your email', 'Enter your email', 1),
                ('Phone', 'Phone', 1),
                ('Enter your number', 'Enter your number', 1),
                ('Enter your address', 'Enter your address', 1),
                ('Website', 'Website', 1),
                ('http://mytomato.com', 'http://mytomato.com', 1),
                ('Bio', 'Bio', 1),
                ('Enter more text', 'Enter more text', 1),
                ('Upload New Avatar', 'Upload New Avatar', 1),
                ('Upload Avatar', 'Upload Avatar', 1),
                ('From URL', 'From URL', 1),
                ('Url', 'Url', 1),
                ('Current password', 'Current password', 1),
                ('Please enter your current password', 'Please enter your current password', 1),
                ('New Password', 'New Password', 1),
                ('enter new password', 'enter new password', 1),
                ('Confirm New Password', 'Confirm New Password', 1),
                ('Visibility', 'Visibility', 1),
                ('Keep your profile visible', 'Keep your profile visible', 1),
                ('Default when you share a place', 'Default when you share a place', 1),
                ('Private', 'Private', 1),
                ('Public', 'Public', 1),
                ('Notifications', 'Notifications', 1),
                ('Receive monthly reports', 'Receive monthly reports', 1),
                ('Receive an email after every payment', 'Receive an email after every payment', 1),
                ('Receive an email after every application', 'Receive an email after every application', 1),
                ('Currency', 'Currency', 1),
                ('VAT', 'VAT', 1),
                ('IBAN', 'IBAN', 1),
                ('SWIFT', 'SWIFT', 1),
                ('Next due date', 'Next due date', 1),
                ('TOTAL Rent', 'TOTAL Rent', 1),
                ('progress', 'progress', 1),
                ('My place', 'My place', 1),
                ('change', 'change', 1),
                ('Rented properties', 'Rented properties', 1),
                ('Your rent', 'Your rent', 1),
                ('Month Overview', 'Month Overview', 1),
                ('monthly stats', 'monthly stats', 1),
                ('tenants status', 'tenants status', 1),
                ('Received', 'Received', 1),
                ('Incoming', 'Incoming', 1),
                ('Revenue Summary', 'Revenue Summary', 1),
                ('weekly stats', 'weekly stats', 1),
                ('Month', 'Month', 1),
                ('Year', 'Year', 1),
                ('Overdue', 'Overdue', 1),
                ('Profit', 'Profit', 1),
                ('Total Sales', 'Total Sales', 1),
                ('Revenue', 'Revenue', 1),
                ('Expenses', 'Expenses', 1),
                ('Growth', 'Growth', 1),
                ('Remaining', 'Remaining', 1),
                ('Latest', 'Latest', 1),
                ('Messages', 'Messages', 1),
                ('Please add a property and / or tenant first!', 'Please add a property and / or tenant first!', 1),
                ('Payment received from', 'Payment received from', 1),
                ('Try sending a message first', 'Try sending a message first', 1),
                ('Welcome to Rentling', 'Welcome to Rentling', 1),
                ('Compose', 'Compose', 1),
                ('Priority', 'Priority', 1),
                ('Low priority', 'Low priority', 1),
                ('Normal priority', 'Normal priority', 1),
                ('High priority', 'High priority', 1),
                ('Message', 'Message', 1),
                ('Write your message here', 'Write your message here', 1),
                ('Send', 'Send', 1),
                ('Manage your tags', 'Manage your tags', 1),
                ('From', 'From', 1),
                ('Subject', 'Subject', 1),
                ('About you', 'About you', 1),
                ('Edit', 'Edit', 1),
                ('pending', 'pending', 1),
                ('Create New Email', 'Create New Email', 1),
                ('Email Subject', 'Email Subject', 1),
                ('Event', 'Event', 1),
                ('choose event', 'choose event', 1),
                ('Language', 'Language', 1),
                ('HTML', 'HTML', 1),
                ('Save Email', 'Save Email', 1),
                ('Emails', 'Emails', 1),
                ('New Email', 'New Email', 1),
                ('Payment Status', 'Payment Status', 1),
                ('Invoice ID', 'Invoice ID', 1),
                ('Tenant:', 'Tenant:', 1),
                ('Property:', 'Property:', 1),
                ('Payment Details:', 'Payment Details:', 1),
                ('Item', 'Item', 1),
                ('Cost', 'Cost', 1),
                ('Sub Total amount:', 'Sub Total amount:', 1),
                ('Discount:', 'Discount:', 1),
                ('VAT:', 'VAT:', 1),
                ('Grand Total:', 'Grand Total:', 1),
                ('Print Invoice', 'Print Invoice', 1),
                ('Pay Invoice', 'Pay Invoice', 1),
                ('Tenant Invoices', 'Tenant Invoices', 1),
                ('Avatar', 'Avatar', 1),
                ('Moving Out Date', 'Moving Out Date', 1),
                ('Account Type', 'Account Type', 1),
                ('Last Issued Invoice', 'Last Issued Invoice', 1),
                ('ID#','ID#',1),
                ('Yes','Yes',1),
                ('No. Click for Yes','No. Click for Yes',1),
                ('Free','Free',1),
                ('Pro','Pro',1),
                ('No.#','No.#',1),
                ('Color','Color',1),
                ('Icon','Icon',1),
                ('No tags have been found. Add some first.','No tags have been found. Add some first.',1),
                ('Tag name','Tag name',1),
                ('Enter a subject for your message','Enter a subject for your message',1),
                ('Reply','Reply',1),
                ('Reply all','Reply all',1),
                ('Forward','Forward',1),
                ('Close','Close',1),
                ('Select some tags or hit save','Select some tags or hit save',1),
                ('Edit tags','Edit tags',1),
                ('Save tags','Save tags',1),
                ('Due','Due',1),
                ('Mark done','Mark done',1),
                ('Create a new task','Create a new task',1),
                ('Need help? Watch the video.','Need help? Watch the video.',1),
                ('Property must be selected','Property must be selected',1),
                ('Association e-Mail','Association e-Mail',1),
                ('Email is required','Email is required',1),
                ('Email is invalid','Email is invalid',1),
                ('Select...','Select...',1),
                ('Hold','Hold',1),
                ('On Hold','On Hold',1),
                ('Payments per Tenant','Payments per Tenant',1),
                ('Last import date','Last import date',1),
                ('TOTAL RENT DUE','TOTAL RENT DUE',1),
                ('TOTAL RENT PAID','TOTAL RENT PAID',1),
                ('TOTAL CHARGES','TOTAL CHARGES',1),
                ('TOTAL CREDITS','TOTAL CREDITS',1),
                ('Early termination fee','Early termination fee',1),
                ('Net deposit return','Net deposit return',1),
                ('Contract end date:','Contract end date:',1),
                ('Proof of deregistration','Proof of deregistration',1),
                ('Proof of deregistration:','Proof of deregistration:',1),
                ('RENT DUE PER DATE','RENT DUE PER DATE',1),
                ('Nr','Nr',1),
                ('Comments','Comments',1),
                ('CHARGES AND CREDITS','CHARGES AND CREDITS',1),
                ('PAYMENTS','PAYMENTS',1),
                ('Send Rent Increase','Send Rent Increase',1),
                ('Notification start date','Notification start date',1),
                ('Notification end date','Notification end date',1),
                ('Rent increase date','Rent increase date',1),
                ('(Reference date. The new rent amount will be calculated \"as of\" this date)','(Reference date. The new rent amount will be calculated \"as of\" this date)',1),
                ('Body','Body',1),
                ('New Rent','New Rent',1),
                ('Room','Room',1),
                ('%age','%age',1),
                ('Totals','Totals',1),
                ('Contract templates','Contract templates',1),
                ('Early cancellation fees','Early cancellation fees',1),
                ('Rent Components','Rent Components',1),
                ('Add new rent component','Add new rent component',1),
                ('User','User',1),
                ('Rent Component','Rent Component',1),
                ('Effective Date','Effective Date',1),
                ('Submission ID#','Submission ID#', 1),
                ('Cancel Deposit Relay','Cancel Deposit Relay',1),
                ('Cancel Reason','Cancel Reason',1),
                ('Change','Change',1),
                ('Dashboard', 'Dashboard', 1),
                ('Planning','Planning', 1),
                ('Association Settings', 'Association Settings',1),
                ('Deposit Relays', 'Deposit Relays',1),
                ('Send rent increase', 'Send rent increase', 1),
                ('Contract workbench', 'Contract workbench', 1),
                ('Service Cost Account','Service Cost Account', 1),
                ('Service Account Type', 'Service Account Type', 1), 
                ('Creating New Record', 'Creating New Record', 1), 
                ('New Record', 'New Record', 1),
                ('Cost Type', 'Cost Type', 1),
                ('Type must be selected','Type must be selected', 1), 
                ('Year is required', 'Year is required', 1),
                ('Upload your invoice', 'Upload your invoice', 1), 
                ('Invoice file is required', 'Invoice file is required', 1)";
                DB::insert($sql);
    }
}