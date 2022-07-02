<?php

namespace hahahalib;

/*
封存用，非壓縮用途

壓縮請另外寫
https://hooo.medium.com/%E5%B7%A5%E4%BD%9C%E7%AD%86%E8%A8%98-%E9%80%8F%E9%81%8E7zip%E6%8C%87%E4%BB%A4%E5%B0%8D%E6%AA%94%E6%A1%88%E9%80%B2%E8%A1%8C%E5%A3%93%E7%B8%AE%E8%88%87%E8%A7%A3%E5%A3%93%E7%B8%AE-861da198932
*/
class _7zip
{
    use \hahahalib\Instance;

    public $Exe_7zip = null;

    // ---------------------------------------------------------------- 
    // 初始化
    // ---------------------------------------------------------------- 
    public function Initial() 
    {
        return $this;
        
    }

    public function Initial_Config() 
    {
        return $this;
        
    }

    // 執行檔路徑
    public function Initial_7zip(&$exe_file) 
    {
        $this->Exe_7zip = &$exe_file;
        return $this;

    }

    // ---------------------------------------------------------------- 
    // 主要
    // ---------------------------------------------------------------- 

    /*
    封存，不進行壓縮
    */
    public function Archive($archive_file, &$list = [])
    {
        $command = "";

        // $command .= "";
        $command .= "\"{$this->Exe_7zip}\" ";
        $command .= "a ";
        // 封存
        $command .= "-mx0 ";
        $command .= "\"{$archive_file}\" ";
        foreach($list as $key => &$item)
        {
            $command .= "\"{$item}\" ";
        }
        // $command .= "";
        exec($command);

        return true;

    }

    /*
    解封存，無壓縮
    */
    public function Un_Archive($archive_file, $dir)
    {
        $command = "";

        // $command .= "";
        $command .= "\"{$this->Exe_7zip}\" ";
        $command .= "e ";
        // 封存
        $command .= "\"{$archive_file}\" ";
        $command .= "-o\"{$dir}\" ";
        
        // $command .= "";
        exec($command);

        return true;

    }

    // ---------------------------------------------------------------- 
    // 
    // ---------------------------------------------------------------- 

    // ---------------------------------------------------------------- 
    // 
    // ---------------------------------------------------------------- 
} 