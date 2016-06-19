<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_e8304514864892590895ef580fb9858efc8e51013d51a7dd9e7000c15e79e46c extends Twig_Template
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
        $__internal_1e1f9013ad4e9d138481e545764d67c82881fe082226cc250891045357127c0e = $this->env->getExtension("native_profiler");
        $__internal_1e1f9013ad4e9d138481e545764d67c82881fe082226cc250891045357127c0e->enter($__internal_1e1f9013ad4e9d138481e545764d67c82881fe082226cc250891045357127c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_1e1f9013ad4e9d138481e545764d67c82881fe082226cc250891045357127c0e->leave($__internal_1e1f9013ad4e9d138481e545764d67c82881fe082226cc250891045357127c0e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
