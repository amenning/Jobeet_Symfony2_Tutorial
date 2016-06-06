<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_dc130b5be1e84e7370c1078406f5f9cca61f40a4dfb3342eb805076e1563ba9a extends Twig_Template
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
        $__internal_ba9ed45dde4a6fc4797c23876e6db71a4b8adeab8d6dcd7f71e56c67fea88032 = $this->env->getExtension("native_profiler");
        $__internal_ba9ed45dde4a6fc4797c23876e6db71a4b8adeab8d6dcd7f71e56c67fea88032->enter($__internal_ba9ed45dde4a6fc4797c23876e6db71a4b8adeab8d6dcd7f71e56c67fea88032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_ba9ed45dde4a6fc4797c23876e6db71a4b8adeab8d6dcd7f71e56c67fea88032->leave($__internal_ba9ed45dde4a6fc4797c23876e6db71a4b8adeab8d6dcd7f71e56c67fea88032_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
