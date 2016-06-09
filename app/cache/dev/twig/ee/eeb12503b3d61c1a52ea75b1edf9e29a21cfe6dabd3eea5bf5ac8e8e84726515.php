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
        $__internal_45fd4fead31749676f264572b8bfe4c97a60f809d4c12d77677e1f076b0755c8 = $this->env->getExtension("native_profiler");
        $__internal_45fd4fead31749676f264572b8bfe4c97a60f809d4c12d77677e1f076b0755c8->enter($__internal_45fd4fead31749676f264572b8bfe4c97a60f809d4c12d77677e1f076b0755c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_45fd4fead31749676f264572b8bfe4c97a60f809d4c12d77677e1f076b0755c8->leave($__internal_45fd4fead31749676f264572b8bfe4c97a60f809d4c12d77677e1f076b0755c8_prof);

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
