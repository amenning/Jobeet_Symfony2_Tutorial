<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_447e9b6ab9f0cc1469beb83794974b0eaf329ce3a3fa9d149554fdaff175c386 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_985df0df3197f63fda5b92db63d871445f4495a8e4f9b223d032dca980ca3574 = $this->env->getExtension("native_profiler");
        $__internal_985df0df3197f63fda5b92db63d871445f4495a8e4f9b223d032dca980ca3574->enter($__internal_985df0df3197f63fda5b92db63d871445f4495a8e4f9b223d032dca980ca3574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_985df0df3197f63fda5b92db63d871445f4495a8e4f9b223d032dca980ca3574->leave($__internal_985df0df3197f63fda5b92db63d871445f4495a8e4f9b223d032dca980ca3574_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
