-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2016 at 12:51 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `andreww`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicationdb`
--

CREATE TABLE `applicationdb` (
  `AID` int(2) NOT NULL,
  `Product Name` varchar(19) DEFAULT NULL,
  `Publisher` varchar(31) DEFAULT NULL,
  `Description` varchar(1007) DEFAULT NULL,
  `Product Link` varchar(62) DEFAULT NULL,
  `Category` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `applicationdb`
--

INSERT INTO `applicationdb` (`AID`, `Product Name`, `Publisher`, `Description`, `Product Link`, `Category`) VALUES
(1, '@icon sushi', 'Towofu''s SOFT', '@icon sushi is an image to icon converter that supports the mask editor and the creation of Windows XP 32bit/Windows Vista format icons.', 'http://www.towofu.net/soft/e-aicon.php', 9),
(2, '7-Zip', 'Igor Pavlov', '7-Zip uses its own 7z archive format, but can read and write several other archive formats. The program can be used from a command-line interface, graphical user interface, or with a window-based shell integration. 7-Zip began in 1999 and is developed by Igor Pavlov. The cross-platform version of the command-line utility, p7zip, is also available.', 'http://7-zip.org/', 8),
(3, 'astroGREP', 'Theodore L. Ward & Curtis Beard', 'AstroGrep is A Microsoft Windows GUI File Searching (grep) utility. Features include regular expressions, versatile printing options, stores most recent used paths and has a "context" feature which is very nice for looking at source code.', 'http://astrogrep.sourceforge.net/', 8),
(4, 'Audacity', 'The Audacity Team', 'Audacity is free, open source software for recording and editing sounds. You can use Audacity to record live audio, convert tapes and records, edit sound files, change the speed or pitch of a recording and much more.', 'http://audacityteam.org/', 1),
(5, 'Blender', 'Blender Foundation', 'Blender is the free open source 3D content creation suite, available for all major operating systems under the GNU General Public License.\r\nIt can be used for modeling, UV unwrapping, texturing, rigging, water simulations, skinning, animating, rendering, particle and other simulations, non-linear editing, compositing, and creating interactive 3D applications, rigid body, fluid, cloth and softbody dynamics, modifier based modeling tools, powerful character animation tools, a node based\r\nmaterial and compositing system and Python for embedded scripting.', 'http://www.blender.org/', 1),
(6, 'Chrome', 'Google Inc.', 'A free web browser developed by Google from the open source Small Chromium iconChromium project with a focus on speed and minimalism. Chrome offers fast start-up and web page loading, sports a minimalist user interface, automatically updates in the background, and offers syncing of browser bookmarks, extensions, passwords, and history between multiple computers by Google account.\r\n\r\nAdditionally, Chrome has Flash and PDF support built into the browser for better speed and security.\r\n\r\nChrome Web Apps and Extensions are available on Small Chrome Web Store iconChrome Web Store .\r\n\r\nAvailable in more than 50 languages.', 'https://www.google.com/chrome', 11),
(7, 'ClickMonitorDDC', 'mapini', 'ClickMonitorDDC can adjust brightness and contrast of external monitors \r\nby using DDC-protocol over monitor-cable (DVI, HDMI, DisplayPort, VGA). \r\nNearly all monitors support DDC-protocol, but some monitors may not work\r\nbecause of faulty or no DDC-protocol. A few monitors allow to deactivate DDC-protocol,\r\nthis is not recommended, also windows makes use of DDC to find out about best resolution.\r\nSome monitors offer special modes with fixed brightness/contrast for games etc.\r\nin this case adjusting values will fail.', 'http://clickmonitorddc.bplaced.net/', 8),
(8, 'ColorPix', 'ColorSchemer', 'ColorPix is a useful little color picker that grabs the pixel under your mouse and transforms it into a number of different color formats.\r\n\r\nYou can use the built-in magnifier to zoom in on your screen, click on a color value to copy it directly to the clipboard, and even keep ColorPix on top of all other apps and out of the way.', 'http://www.colorschemer.com/colorpix_info.php', 9),
(9, 'Dropbox', 'Dropbox Inc', 'Put your files into your Dropbox on one computer, and they''ll be instantly available on any of your other computers that also have Dropbox installed. Because copies of your files are stored on Dropbox''s secure servers, you can also access them from any computer or mobile device using the Dropbox website.', 'https://www.dropbox.com/', 3),
(10, 'Duet Display', 'Duet Inc', 'Duet makes your iPad and your Mac more powerful together. Slide Mac apps to your iPad as a second display. No lag, Duet helps you multi-task and work faster with more screen space. It doesn''t require internet, just plug and play to get started and you can use the iPad''s touch display too. Draw on the screen, produce beats with midi boards, design on the iPad and more.\r\n\r\nDuet is used by industrial designers, software developers, musicians, illustrators and more. It''s portability has made Duet useful in coffeeshops, airports and conferences.\r\n\r\nMore space. More play. More speed. More touch.\r\nCombine the power of your devices with Duet.', 'http://www.duetdisplay.com/', 8),
(11, 'DxO OpticsPro', 'DxO Labs', 'DxO Labs offers products and solutions ensuring excellence in digital imaging.', 'http://www.dxo.com/us/photography/photo-software/dxo-opticspro', 9),
(12, 'Everything', 'Voidtools', '"Everything" is an administrative tool that locates files and folders by filename instantly for Windows. Unlike Windows search "Everything" initially displays every file and folder on local or removable NTFS volumes on your computer (hence the name "Everything"), and on mapped network drives with ETP server and an everything installation too. You type in a search filter to limit what files and folders are displayed. 19 languages supported.', 'http://www.voidtools.com/', 8),
(13, 'f.lux', 'f.lux Software LLC', 'Ever notice how people texting at night have that eerie blue glow?\r\n\r\nOr wake up ready to write down the Next Great Idea, and get blinded by your computer screen?\r\nDuring the day, computer screens look good—they''re designed to look like the sun. But, at 9PM, 10PM, or 3AM, you probably shouldn''t be looking at the sun.\r\n\r\nf.lux fixes this: it makes the color of your computer''s display adapt to the time of day, warm at night and like sunlight during the day.\r\n\r\nIt''s even possible that you''re staying up too late because of your computer. You could use f.lux because it makes you sleep better, or you could just use it just because it makes your computer look better.\r\n\r\nf.lux makes your computer screen look like the room you''re in, all the time. When the sun sets, it makes your computer look like your indoor lights. In the morning, it makes things look like sunlight again.\r\n\r\nTell f.lux what kind of lighting you have, and where you live. Then forget about it. f.lux will do the rest, automatically.', 'https://justgetflux.com/', 8),
(14, 'FeedDemon', 'Nick Bradbury', 'FeedDemon is a popular RSS reader for Windows, with an easy-to-use interface that makes it a snap to stay informed with the latest news and information.', 'http://www.feeddemon.com/', 6),
(15, 'Fences', 'Stardock', 'Fences is a one-of-a-kind program, allowing you to draw labeled shaded areas on your desktop, which become movable and resizable containers for your desktop icons. These groups can help bring organization and consistency to your computers desktop, solving the "constant mess" problem that has plagued the desktop since its inception. ', 'http://www.stardock.com/products/fences/', 8),
(16, 'Fiddler', 'Telerik', 'Fiddler is a Web Debugging Proxy which logs all HTTP(S) traffic between your computer and the Internet. Fiddler allows you to inspect all HTTP(S) traffic, set breakpoints, and "fiddle" with incoming or outgoing data. Fiddler includes a powerful event-based scripting subsystem, and can be extended using any .NET language.', 'http://www.telerik.com/fiddler', 5),
(17, 'FileZilla', 'FileZilla Project', 'FileZilla is a powerful FTP-client. It has been designed for ease of use and with support for as many features as possible, while still being fast and reliable.', 'http://filezilla-project.org/', 5),
(18, 'Firefox', 'Mozilla Foundation', 'Mozilla Firefox is a free and open source web browser descended from the Mozilla Application Suite. Firefox is highly extensible, with thousands of third-party add-ons available.', 'https://www.mozilla.org/firefox/', 11),
(19, 'Franz', 'Stefan Malzner', 'Franz is a free messaging app / former Emperor of Austria and combines chat & messaging services into one application. Franz currently supports Slack, WhatsApp, WeChat, HipChat, Facebook Messenger, Telegram, Google Hangouts, GroupMe, Skype and many more. You can download Franz for Mac, Windows & Linux.', 'http://meetfranz.com/', 10),
(20, 'Google Drive', 'Google Inc.', 'Google Drive is a file storage and synchronization service which enables user cloud storage, file sharing and collaborative editing.', 'https://drive.google.com/', 3),
(21, 'Illustrator', 'Adobe', 'Design quickly and confidently with Adobe Illustrator software. Sophisticated tools for drawing and typography, along with advanced color controls and creative effects, provide a comprehensive vector graphics environment. Explore more efficient ways of working with multiple artboards, a Blob Brush tool for intuitive vector painting, and transparency in gradients with on-object controls. Stay ahead of the pace of change — equip yourself with precisely the tools you need for today’s print, web , interactive, motion, and mobile content design.', 'http://www.adobe.com/products/illustrator.html', 9),
(22, 'JustDecompile', 'Telerik', 'JustDecompile is a stand-alone, free decompiling tool which converts assemblies into source code.', 'http://www.telerik.com/products/decompiler.aspx', 2),
(23, 'Kodi', 'Kodi Team', 'Kodi, formerly XBMC, is a free and open source media player and entertainment center for Linux, Mac OS X, Windows, XBox, and iOS. Kodi is designed to be the perfect companion to a home theater PC - it supports an almost endless range of remote controls, and combined with its beautiful (and highly "skinnable") interface, Kodi feels very natural to use from the couch.', 'http://kodi.tv/', 1),
(24, 'Live', 'Ableton', 'Ableton Live is about making music; for composition, songwriting, recording, production, remixing and live performance. Live''s nonlinear, intuitive flow, alongside powerful real-time editing and flexible performance options, make it a unique studio tool and a favorite with live performers. If you''d rather be "making music" than just "using music software," Ableton Live is for you. Live 8, the latest version, includes a wealth of new techniques and improvements with a\r\nnew groove engine, revamped warping, live looping, new effects, crossfades in the Arrangement View and a reworked MIDI editor.', 'https://www.ableton.com/en/live/', 1),
(25, 'Melodyne', 'Celemony', 'Celemony Melodyne is the perfect quick and easy tool for all your tuning needs. Great for editing pitches of instrument and vocal recordings (auto-tuning your voice) and even sounding like a robot!\r\n30-day unlimited trial.', 'http://www.celemony.com/cms/', 1),
(26, 'Mumble', 'Mumble', 'Mumble was the first and is the most successful and wide spread free and open source software for VoIP. It was the first VoIP software to provide low-latency audio suitable for gaming, and at the same time was a pioneer in high audio quality at the same time.', 'http://mumble.sourceforge.net/', 10),
(27, 'NetMeter', 'Hoo Technologies', 'Net Meter monitors network traffic through all network connections on the computer it''s installed on, and displays real-time graphical and numerical downloading and uploading speeds. ', 'http://www.hootech.com/NetMeter/', 8),
(28, 'Offload', 'Red Giant Software', 'Offload is a copy utility for media card files. Get your footage and stills off your camera safely and quickly, with complete trust.', 'https://www.redgiant.com/products/offload/', 9),
(29, 'paint.NET', 'dotPDN LLC', 'Paint.NET is a free image and photo editing software. It features an intuitive and innovative user interface with support for layers, unlimited undo, special effects, and a wide variety of useful and powerful tools. An active and growing online community provides friendly help, tutorials, and plugins.', 'http://www.getpaint.net/', 9),
(30, 'PhantomPDF', 'Foxit', 'Ideal for groups of all sizes, this full featured solution to create, edit, comment, collaborate and share, secure, organize, export, scan and OCR, and sign PDF documents and forms. It also supports ConnectedPDF features, which extend the ISO PDF standard to allow each PDF to carry a unique identifier that leverages the power of the cloud to keep you and your PDFs connected, and enables you to track and share your documents easily.', 'http://www.foxitsoftware.com/pdf-editor/', 7),
(31, 'Photoshop', 'Adobe', 'Photoshop was created in 1988 by Thomas and John Knoll. Since then, it has become the de facto industry standard in raster graphics editing, such that the word "photoshop" has become a verb as in "to Photoshop an image," "photo shopping," and "photoshop contest," etc. It can edit and compose raster images in multiple layers and supports masks, alpha compositing and several color models including RGB, CMYK, Lab color space, spot color and duotone.', 'https://www.adobe.com/products/photoshop.html', 9),
(32, 'PluralEyes', 'Red Giant Software', 'Automatic sync of several video and audio files.', 'http://www.redgiantsoftware.com/products/all/pluraleyes/', 1),
(33, 'Polar Clock', 'pixelbreaker', 'A fancy clock screensaver', 'http://blog.pixelbreaker.com/polarclock', 8),
(34, 'ProPresenter', 'Renewed Vision', 'ProPresenter has been the preferred lyric presentation system for churches and ministries around the world for years. With an intuitive interface and incredible video engine, ProPresenter has never been easier or more spectacular. ProPresenter 3 has been written from the ground up as a Universal binary which means it fully supports both PowerPC as well as Intel processor Macs natively. Thus, its very fast and very responsive. The whole program is scalable to adjust to any size display and\r\nallows for slides and backgrounds to grow or shrink easily. This looks beautiful on all those new Macs with high-resolution displays and comes in very handy when you want to see a lot of slides or clips at a time.', 'http://www.renewedvision.com/index.php', 1),
(35, 'Pulseway', 'Pulseway', 'Pulseway changes the enterprise monitoring and management game with its mobile management solution. Now you can receive alerts and manage your systems from anywhere on any device. Monitor and manage all of your Windows, Linux, and Mac servers and workstations with a simple app on your mobile device.', 'http://www.pulseway.com/', 8),
(36, 'PuTTY', 'Simon Tatham', 'PuTTY is a free implementation of Telnet and SSH for Windows and Unix platforms.\r\n\r\nA simple, lightweight client for connecting to a Linux shell from your Windows machine!', 'http://www.chiark.greenend.org.uk/~sgtatham/putty/', 2),
(37, 'PyCharm', 'JetBrains', 'Python and Django IDE with refactorings, code completion, on-the-fly code analysis and other features, including version control integration, deployment, integration with issue trackers, and remote debugging. ', 'https://www.jetbrains.com/pycharm/', 2),
(38, 'Resilio Sync', 'BitTorrent', 'Resilio Sync allows you to automatically sync files between computers via secure, distributed technology (P2P bittorrent protocol).', 'https://www.getsync.com/', 3),
(39, 'Resource Hacker', 'Angus Johnson', 'Resource Hacker has been designed to be the complete resource editing tool: compiling, viewing, decompiling and recompiling resources for both 32bit and 64bit Windows executables.', 'http://angusj.com/resourcehacker/', 2),
(40, 'Revo Uninstaller', 'VS Revo Group', 'Revo Uninstaller helps uninstall software from Windows systems and has a free and a pro version. Its main purpose is to remove unnecessary files and registry entries left behind by incomplete program uninstallation routines. Revo Uninstaller is a much faster and more powerful alternative to "Windows Add or Remove Programs" applet. ', 'http://www.revouninstaller.com', 8),
(41, 'Sandboxie', 'Invincea', 'Sandboxie runs your programs in an isolated space which prevents them from making permanent changes to other programs and data in your computer. Secure Web Browsing: Running your Web browser under the protection of Sandboxie means that all malicious software downloaded by the browser is trapped in the sandbox and can be discarded trivially. Enhanced Privacy: Browsing history, cookies, and cached temporary files collected while Web browsing stay in the sandbox and dont leak into Windows.', 'http://www.sandboxie.com/', 8),
(42, 'Sibelius', 'Avid', 'Sibelius is the world''s best-selling music notation software, trusted by top composers, publishers, and students alike. With Sibelius 7.5, you can express, accelerate, and promote your creativity in more ways than ever before, enabling you to deliver beautiful, professional scores faster and share audio and video versions of your work-with stunningly realistic musical phrasing-to make your talent stand out from the crowd. It''s the fastest, smartest, easiest way to write music for live\r\nperformance, film and television, media entertainment, or in the classroom.', 'http://www.sibelius.com/products/sibelius/index.html', 1),
(43, 'SmartGit', 'Syntevo', 'SmartGit is a front-end for the distributed version control system Git and runs on Windows, Mac OS X and Linux. SmartGit is intended for developers who prefer a graphical user interface over a command line client, to be even more productive with Git — the most powerful DVCS today.', 'http://www.syntevo.com/smartgit/', 2),
(44, 'SONAR', 'Cakewalk', 'Cakewalk SONAR is a computer program made by Cakewalk for recording, editing, mixing, mastering and outputting audio. \r\nSONAR is an example of a digital audio workstation (DAW). Sonar is like most DAWs, however SONAR lets the user:\r\n\r\n* Record and manipulate an unlimited amount of multitrack digital audio (only limited by hardware)\r\n* Comprehensively record and manipulate MIDI data\r\n* Apply any DirectX special\r\neffects, such as reverb and delay, many versions bundled with included effects\r\n* Automate the process of mixing audio\r\n* Utilize virtual instruments, such as software synthesizers, software samplers, software drum machines\r\n* Connect to other multimedia applications with sample accuracy via Rewire\r\n* SONAR Producer Edition includes a complete industry-standard 64-bit MASTERING suite [5]\r\n\r\nLink to official Cakewalk SONAR site', 'http://www.cakewalk.com/products/sonar', 1),
(45, 'Spacedesk', 'datronicsoft Inc', 'spacedesk is a windows network display monitor software that expands the Windows desktop computer screen to other computers over the local area network.', 'http://www.spacedesk.ph/', 8),
(46, 'Spotify', 'Spotify', 'Spotify is a commercial music streaming service providing digital rights management-restricted content from record labels including Sony, EMI, Warner Music Group and Universal.', 'https://spotify.com/', 1),
(47, 'Startup Delayer', 'r2 Studios', 'Startup Delayer gives you the power to optimize your Startup Process by delaying applications from starting up as soon as you log into your computer.', 'http://www.r2.com.au/page/products/show/startdelay', 8),
(48, 'Steam', 'Valve Corporation', 'Steam is a digital distribution, digital rights management, multiplayer and communications platform developed by Valve Corporation. It is used to distribute a wide range of games and related media entirely over the internet, stretching from one-man independent efforts to some of the worlds most popular games. Steam is set apart from its peers in terms of functionality primarily by its residency in the system tray, and the desktop tasks that the client software performs to make use of that position.', 'http://store.steampowered.com/', 4),
(49, 'Suitcase Fusion', 'Extensis', 'Font management software. Search, preview and activate fonts. Detect and correct corrupt fonts. Suitcase Fusion is an early adopter too with seamless auto-activation support for Adobe InDesign, Adobe Illustrator and QuarkXPress.', 'http://www.extensis.com/font-management/suitcase-fusion/', 7),
(50, 'Synergy', 'Symless', 'Synergy lets you easily share a single mouse and keyboard between multiple computers with different operating systems, each with its own display, without special hardware. Its intended for users with multiple computers on their desk since each system uses its own monitor(s).\r\n\r\nThis solves the problem of having multiple keyboards and mice.\r\nRedirecting the mouse and keyboard is as simple as moving the mouse off the edge of your screen. Synergy also merges the clipboards of all the systems into one, allowing cut-and-paste between systems. Furthermore, it synchronizes screen savers so they all start and stop together and, if screen locking is enabled, only on.', 'http://symless.com/synergy/', 7),
(51, 'Unlocker', 'Empty Loop', 'Get rid of error message like Error deleting or renaming file or folder, cannot delete folder: its being used by another person or program Unlocker application was designed to be a very useful Windows Explorer extension allowing users with a simple right-click on a file or folder to easily get rid of error message such as error deleting file or folder, cannot delete or rename folders.', 'http://www.emptyloop.com/unlocker/', 8),
(52, 'Vector Magic', 'Vector Magic, Inc.', 'Vector Magic automatically converts bitmap images like JPEGs, GIFs and PNGs to the crisp, clean, scalable vector art of EPS, SVG, and PDF.', 'http://www.vectormagic.com/', 9),
(53, 'Virtual Audio Cable', 'Eugene Muzychenko', 'Ever wanted to record your speaker output? (loopback) This is for you. It makes tinkering with the audio of each individual application much easier. As well as being able to loop-back.', 'http://software.muzychenko.net/eng/vac.html', 1),
(54, 'Visual Studio', 'Microsoft', 'Microsoft Visual Studio is an integrated development environment (IDE) from Microsoft. It is used to develop computer programs for Microsoft Windows, as well as web sites, web applications and web services. Visual Studio uses Microsoft software development platforms such as Windows API, Windows Forms, Windows Presentation Foundation, Windows Store and Microsoft Silverlight. It can produce both native code and managed code.', 'http://www.visualstudio.com/products/visual-studio-express-vs', 2),
(55, 'VLC', 'VideoLAN', 'VLC is a free and open source cross-platform multimedia player and framework that plays most multimedia files as well as DVDs, Audio CDs, VCDs, and various streaming protocols.\r\n\r\nFeatures', 'http://videolan.org/vlc', 1),
(56, 'VSCode', 'Microsoft', 'Code combines the streamlined UI of a modern editor with rich code assistance and navigation, and an integrated debugging experience – without the need for a full IDE.', 'https://code.visualstudio.com/', 2),
(57, 'VueMinder', 'VueSoft LLC', 'Take control of your schedule and get reminded wherever and however you want. Instantly access your appointments, tasks, and notes with a simple glance at a transparent calendar that sits right on your Windows desktop. Share calendars and reminders in your home, office, or online. Automatically synchronize with Google Calendar and Outlook. Print calendars using a wide variety of layouts and styles. You can do all these things and much more with VueMinder Calendar.', 'http://www.vueminder.com/', 7),
(58, 'waifu2x', 'nagadomi', 'Single-Image Super-Resolution for Anime-Style Art using Deep Convolutional Neural Networks. And it supports photo.', 'http://waifu2x.udp.jp/', 9),
(59, 'WinDirStat', 'WinDirStat', 'WinDirStat is a disk usage statistics viewer and cleanup tool', 'http://www.windirstat.info/', 8),
(60, 'WinOFF', 'AMPsoft', 'AMP WinOFF is an utility designed to schedule the shut down of Windows computers, with several shut down modes and fully configurable. Some of its features are:\r\n\r\nScheduled shut downs, either at a set time (e.g. 12:00 PM) or after a period of time (e.g. 1 hour and 15 minutes).\r\n\r\nPerform a shut down when the CPU becomes idle, or when network adapter becomes idle (after downloading and/or uploading).\r\n\r\nSeveral types of shut down (shut down, restart, close session, power off, administrative shut down/restart, suspend, hibernate and lock computer).\r\n\r\nImmediate shut down and computer lock from the task bar icon menu.\r\nSeveral security options includi', 'http://www.ampsoft.net/utilities/WinOFF.php', 8),
(61, 'Workstation', 'VMware', 'Discover the true power and flexibility of your desktop or laptop computer with VMware Workstation. Reduce hardware costs by 50% or more by running multiple operating systems simultaneously on a single physical PC. Automate and streamline tasks to save time and improve productivity. Join the millions worldwide who use Workstation to:', 'http://vmware.com/products/workstation', 8);

-- --------------------------------------------------------

--
-- Table structure for table `categorydb`
--

CREATE TABLE `categorydb` (
  `categoryid` int(2) NOT NULL,
  `categoryname` varchar(23) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categorydb`
--

INSERT INTO `categorydb` (`categoryid`, `categoryname`) VALUES
(1, 'Audio & Video'),
(2, 'Development'),
(3, 'File Management'),
(4, 'File Sharing'),
(5, 'Games'),
(6, 'Network & Admin'),
(7, 'News & Books'),
(8, 'Office & Productivity'),
(9, 'OS & Utilities'),
(10, 'Photos & Graphics'),
(11, 'Social & Communications'),
(12, 'Web Browsers');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicationdb`
--
ALTER TABLE `applicationdb`
  ADD PRIMARY KEY (`AID`),
  ADD UNIQUE KEY `AID` (`AID`);

--
-- Indexes for table `categorydb`
--
ALTER TABLE `categorydb`
  ADD PRIMARY KEY (`categoryid`),
  ADD UNIQUE KEY `categoryid` (`categoryid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
