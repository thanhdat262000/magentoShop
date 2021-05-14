<?php
namespace Boolfly\ZaloPay\Gateway\Command\RefundCommand;

/**
 * Interceptor class for @see \Boolfly\ZaloPay\Gateway\Command\RefundCommand
 */
class Interceptor extends \Boolfly\ZaloPay\Gateway\Command\RefundCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Payment\Gateway\Request\BuilderInterface $requestBuilder, \Magento\Payment\Gateway\Http\TransferFactoryInterface $transferFactory, \Magento\Payment\Gateway\Http\ClientInterface $client, \Psr\Log\LoggerInterface $logger, ?\Magento\Payment\Gateway\Response\HandlerInterface $handler = null, ?\Magento\Payment\Gateway\Validator\ValidatorInterface $validator = null, ?\Magento\Payment\Gateway\ErrorMapper\ErrorMessageMapperInterface $errorMessageMapper = null)
    {
        $this->___init();
        parent::__construct($requestBuilder, $transferFactory, $client, $logger, $handler, $validator, $errorMessageMapper);
    }

    /**
     * {@inheritdoc}
     */
    public function execute(array $commandSubject)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        if (!$pluginInfo) {
            return parent::execute($commandSubject);
        } else {
            return $this->___callPlugins('execute', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function buildRequestData(array $commandSubject)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'buildRequestData');
        if (!$pluginInfo) {
            return parent::buildRequestData($commandSubject);
        } else {
            return $this->___callPlugins('buildRequestData', func_get_args(), $pluginInfo);
        }
    }
}
