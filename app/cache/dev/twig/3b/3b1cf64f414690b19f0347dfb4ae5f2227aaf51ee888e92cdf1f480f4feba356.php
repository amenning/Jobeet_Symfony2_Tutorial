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
        $__internal_c02d88137c7ddba6f9400a849148b4c6b86ae5e07fcf969b4ba696c5ad00d748 = $this->env->getExtension("native_profiler");
        $__internal_c02d88137c7ddba6f9400a849148b4c6b86ae5e07fcf969b4ba696c5ad00d748->enter($__internal_c02d88137c7ddba6f9400a849148b4c6b86ae5e07fcf969b4ba696c5ad00d748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_c02d88137c7ddba6f9400a849148b4c6b86ae5e07fcf969b4ba696c5ad00d748->leave($__internal_c02d88137c7ddba6f9400a849148b4c6b86ae5e07fcf969b4ba696c5ad00d748_prof);

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
