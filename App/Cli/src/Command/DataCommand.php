<?php

namespace Cli\Command;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Helper\TableStyle;
use ModelsDB\Users;
use ModelsDB\Contact;
class DataCommand extends Command
{
  protected function configure()
  {
      $this->setName('data:users')->setDescription('Nampilin data Users');
  }

  protected function execute(InputInterface $input, OutputInterface $output)
  {
      $style = new TableStyle();
      $style->setVerticalBorderChar('<fg=yellow>|</>')->setHorizontalBorderChar('<fg=yellow>-</>');
      $users = Contact::select('first_name','last_name','email','phone')->get(['first_name','last_name','sss']);
      if(count($users)){
        echo "Contats :"."\n";
        $row = array();
        $header = array();
        foreach ($users as $key => $value) {
            $row[] = array($value->first_name.' '.$value->last_name, $value->email,$value->phone);
        }
        $header[] = array('Nama','Email','Phone');
        $table = new Table($output);
        $table->setHeaders($header)->setRows($row);
        $table->setStyle($style)->render();
      }else {
        echo $output->writeln('<comment>'."\t".'Tidak ada Datanya!</comment>');
      }
  }
}
