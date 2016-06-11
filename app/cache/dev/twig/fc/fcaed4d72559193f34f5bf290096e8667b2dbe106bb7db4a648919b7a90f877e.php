<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_5002a4dd1d5866916f01be36e9a2d3537b88808648b3ed0e8d5cfe7c67c9fdf0 extends Twig_Template
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
        $__internal_876f4896de3a846c0b5d7b85752f5f658ae855a9d335d6e7135ad768cc04e935 = $this->env->getExtension("native_profiler");
        $__internal_876f4896de3a846c0b5d7b85752f5f658ae855a9d335d6e7135ad768cc04e935->enter($__internal_876f4896de3a846c0b5d7b85752f5f658ae855a9d335d6e7135ad768cc04e935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_876f4896de3a846c0b5d7b85752f5f658ae855a9d335d6e7135ad768cc04e935->leave($__internal_876f4896de3a846c0b5d7b85752f5f658ae855a9d335d6e7135ad768cc04e935_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
