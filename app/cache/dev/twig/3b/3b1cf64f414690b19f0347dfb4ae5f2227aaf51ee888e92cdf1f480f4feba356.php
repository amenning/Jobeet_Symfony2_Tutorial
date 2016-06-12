<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_bca0bd27e82bc4f4a84988df0b8459f9a64a676eb8b427813edfaedf45096561 extends Twig_Template
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
        $__internal_f714395d29dd77ef1d7ca629370122f4695fe589f86a304a6f1c4fff25166af8 = $this->env->getExtension("native_profiler");
        $__internal_f714395d29dd77ef1d7ca629370122f4695fe589f86a304a6f1c4fff25166af8->enter($__internal_f714395d29dd77ef1d7ca629370122f4695fe589f86a304a6f1c4fff25166af8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_f714395d29dd77ef1d7ca629370122f4695fe589f86a304a6f1c4fff25166af8->leave($__internal_f714395d29dd77ef1d7ca629370122f4695fe589f86a304a6f1c4fff25166af8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
