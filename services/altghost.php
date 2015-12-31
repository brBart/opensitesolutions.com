<?php
set_include_path ("/var/www/html/opensitesolutions.com/");
?>

<?php
    include 'services/includes/header_ghost.inc';
?>
<?php
    include 'includes/topmenu.inc';
?>

<?php
    include 'includes/right.inc';
?>

<!-- Center Column -->
                <div id="primaryContentContainer">
                        <div id="primaryContent">
                                <h2 id="top">Disk Cloning</h2>
<br><br>
<h5 id="prog">Symantec Norton Ghost</h5>
<p class="post align-right">
        <ul>
	<li>Norton Ghost is the industry's most widely-used corporate imaging, deployment software known across the world. The term Ghost stands for "General Hardware-Oriented System Transfer" has been around since 1995. The technologies that this software supports is full system and file backups, restores from system failures and saves recovery points to offsite locations. Norton ghost can only be used for windows based systems this cannot backup linux based systems..<br><br>
        <b>Open Source Alternative to Symantec Norton Ghost</b>
	<li><a href="http://clonezilla.sourceforge.net/" target="_blank"> Clonezilla</a> is the open source alternative to Symantec Norton Ghost. Clonezilla, based on DRBL, Partition Image, ntfsclone, and udpcast, allows you to do bare metal backup and recovery. Two types of Clonezilla are available, Clonezilla live and Clonezilla server edition. Clonezilla live is suitable for single machine backup and restore. While Clonezilla server edition is for massive deployment, it can clone many (40 plus!) computers simultaneously. Clonezilla saves and restores only used blocks in the harddisk. This increases the clone efficiency. Filesystem supported are ext2, ext3, reiserfs, xfs, jfs of GNU/Linux, and FAT, NTFS of MS Windows. Therefore you can clone  backup GNU/Linux or MS windows. For these file systems, only used blocks in partition are saved and restored. For unsupported file system, sector-to-sector copy is done by dd in Clonezilla. </li><br>

	<li><a href="http://www.ferzkopp.net/joomla/content/view/12/14/" target="_blank">CloneIT</a> system was created to copy and essentially clone harddisks of identical PCs through a network. This is a common task when installing server racks or farms or update a computer-lab setup where one deals with identical machines. The system software consists of a Linux boot floppy and a ramdisk floppy with minimal system utilities that can perform the task of copying the complete content of disk devices through a network.<br>
        The CloneIt software is not specific to any operating system, since the raw harddrive is beeing copied. The limitation for the use of CloneIt is, that the hardware used in the cloning procedure has to be identical. Cloneit is a good G4u open source alternative.</li><br>

        <li><a href="http://www.partimage.org/Main_Page" target="_blank">PartImage</a> is an open source cloning solutions based on linux, images can be compressed with gzip / bzip2 programs to save disk space and can be split into multiple files to be copied on CDs and DVDs. </li><br>

        <li><a href="http://www.fogproject.org/" target="_blank">FOG</a> is a open-source ghost-like imaging solution/rescue suite. A open source alternative to Ghost, used to image Windows XP, Vista PCs using PXE, PartImage, and a Web Gui to tie it together. Includes Featues like memory and disk test, disk wipe and (soon) av scan</li><br>

        <li><a href="http://www.sysresccd.org/Main_Page" target="_blank">SysRescueCD</a> is a Linux system on a bootable CD-ROM for repairing your system and recovering your data after a crash. It aims to provide an easy way to carry out admin tasks on your computer, such as creating and editing the partitions of the hard disk. It contains a lot of system utilities (parted, partimage, fstools, ...) and basic tools (editors, midnight commander, network tools). It is very easy to use: just boot the CDROM. The kernel supports most of the important file systems (ext2/ext3, reiserfs, reiser4, xfs, jfs, vfat, ntfs, iso9660), as well as network filesystems (samba and nfs).</li>
<br>

<a href="#top">Top</a>

        </ul>
</p>

                        </div>
                </div>
        <!-- End center Column -->


<?php
    include 'includes/left.inc';
?>


<?php
    include 'includes/footer.inc';
?>
