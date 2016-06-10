<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_f484198884ebabdef6091d5aefc1a1a4a740787291656e8ff245f457d037a9c2 extends Twig_Template
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
        $__internal_10be72d868c305e13be4f0263df2c37ccd21e940ecab9c526677a142fe1d0fb8 = $this->env->getExtension("native_profiler");
        $__internal_10be72d868c305e13be4f0263df2c37ccd21e940ecab9c526677a142fe1d0fb8->enter($__internal_10be72d868c305e13be4f0263df2c37ccd21e940ecab9c526677a142fe1d0fb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_10be72d868c305e13be4f0263df2c37ccd21e940ecab9c526677a142fe1d0fb8->leave($__internal_10be72d868c305e13be4f0263df2c37ccd21e940ecab9c526677a142fe1d0fb8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
