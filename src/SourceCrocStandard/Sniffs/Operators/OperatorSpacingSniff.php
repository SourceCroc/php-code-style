<?php declare(strict_types=1);

namespace SourceCroc\CodeStyle\SourceCrocStandard\Sniffs\Operators;

use PHP_CodeSniffer\Files\File;
use PHP_CodeSniffer\Standards\PSR12\Sniffs\Operators\OperatorSpacingSniff as PSR12OperatorSpacingSniff;

class OperatorSpacingSniff extends PSR12OperatorSpacingSniff
{
    protected function isOperator(File $phpcsFile, $stackPtr): bool
    {
        $tokens = $phpcsFile->getTokens();
        dump($tokens[$stackPtr]['code']);

        return parent::isOperator($phpcsFile, $stackPtr);
    }
}