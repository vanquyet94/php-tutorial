<?php
foreach (glob("classes/*.php") as $filename)
{
    include $filename;
}
