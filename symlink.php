<?

$rootFolderWithProduction = 'your project directory';

$filesInProduction = scandir($rootFolderWithProduction);

$excludedFiles = [
    'your',
    'excluded',
    'files'
];

foreach ($filesInProduction as $fileName)  {
    if ($fileName == '.' or $fileName == '..' or in_array($fileName, $excludedFiles)) {
        continue;
    }
    else {
        symlink($rootFolderWithProduction.$fileName, $fileName);
    }
}